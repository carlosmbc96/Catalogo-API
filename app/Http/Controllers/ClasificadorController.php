<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use App\Models\Clasificador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasificadorController extends Controller
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
        $all_clasificators = [];
        if ($limit === null) {
            $clasificators = DB::select('select id, nombre, numero from clasificadores');
            return response()->json($clasificators);
        } else {
            $clasificators = DB::select('select id, nombre from clasificadores where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from clasificadores where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($clasificators as $clasificator) {
            array_push($all_clasificators, Clasificador::find($clasificator->id));
        }
        foreach ($all_clasificators as $clasificator) {
            $clasificator->obras;
        }

        return response()->json([$all_clasificators, count($total_results)]);
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
            $clasificator = Clasificador::create([
                'numero' => $request['numero'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($clasificator);
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
        $clasificator = DB::select('select id from clasificadores where numero like '."'$request->number'");
        return count($clasificator) !== 0 ? response()->json(true) : response()->json(false);
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
            $clasificator = Clasificador::find($request['id']);
            $clasificator->numero = $request['numero'];
            $clasificator->nombre = $request['nombre'];
            $clasificator->save();
            return response()->json($clasificator);
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
            foreach ($request['clasificator'] as $clasificator) {
                $item = Clasificador::find($clasificator['id']);
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
