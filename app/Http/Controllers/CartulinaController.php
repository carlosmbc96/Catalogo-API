<?php

namespace App\Http\Controllers;

use App\Models\Cartulina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartulinaController extends Controller
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
        $all_cardboards = [];
        if ($limit === null) {
            $cardboards = DB::select('select id, nombre, numero from cartulinas');
            return response()->json($cardboards);
        } else {
            $cardboards = DB::select('select id, nombre from cartulinas where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order . ' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
            $total_results = DB::select(
                'select id, nombre from cartulinas where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order
            );
            foreach ($cardboards as $cardboard) {
                array_push($all_cardboards, Cartulina::find($cardboard->id));
            }
            foreach ($all_cardboards as $cardboard) {
                $cardboard->obras;
            }

            return response()->json([$all_cardboards, count($total_results)]);
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
            $cardboard = Cartulina::create([
                'numero' => $request['numero'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($cardboard);
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
        $cardboard = DB::select('select id from cartulinas where numero like ' . "'$request->number'");
        return count($cardboard) !== 0 ? response()->json(true) : response()->json(false);
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
            $cardboard = Cartulina::find($request['id']);
            $cardboard->numero = $request['numero'];
            $cardboard->nombre = $request['nombre'];
            $cardboard->save();
            return response()->json($cardboard);
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
            foreach ($request['cardboard'] as $cardboard) {
                $item = Cartulina::find($cardboard['id']);
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
