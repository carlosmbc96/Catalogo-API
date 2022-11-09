<?php

namespace App\Http\Controllers;

use App\Models\Papel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->limit;
        $page = $request->page;
        $order = $request->order;
        $filter = $request->filter;
        $all_papers = [];
        if ($limit === null) {
            $papers = DB::select('select id, nombre, numero from papeles');
            return response()->json($papers);
        } else {
            $papers = DB::select('select id, nombre from papeles where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from papeles where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($papers as $paper) {
            array_push($all_papers, Papel::find($paper->id));
        }
        foreach ($all_papers as $paper) {
            $paper->obras;
        }

        return response()->json([$all_papers, count($total_results)]);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $paper = Papel::create([
                'numero' => $request['numero'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($paper);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function IsUniqueByNumber(Request $request)
    {
        $paper = DB::select('select id from papeles where numero like '."'$request->number'");
        return count($paper) !== 0 ? response()->json(true) : response()->json(false);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $paper = Papel::find($request['id']);
            $paper->numero = $request['numero'];
            $paper->nombre = $request['nombre'];
            $paper->save();
            return response()->json($paper);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            foreach ($request['paper'] as $paper) {
                $item = Papel::find($paper['id']);
                if (count($item->obras()->get()) !== 0) {
                    for ($i = count($item->obras()->get()) - 1; $i >= 0; $i--) {
                        $item->obras()->get()[$i]->pivot->delete();
                    }
                }
                $item->delete();
            }
        } catch (\Exception $exception) {
            return $exception;
        }
        return response()->json();
    }
}
