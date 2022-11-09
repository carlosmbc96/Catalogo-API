<?php

namespace App\Http\Controllers;

use App\Models\TipoTrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoTrabajoController extends Controller
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
        $all_types_work = [];
        if ($limit === null) {
            $types_work = DB::select('select id, nombre, numero from tipos_trabajo');
            return response()->json($types_work);
        }else{
            $types_work = DB::select('select id, nombre from tipos_trabajo where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from tipos_trabajo where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($types_work as $type_work) {
            array_push($all_types_work, TipoTrabajo::find($type_work->id));
        }
        foreach ($all_types_work as $type_work) {
            $type_work->obras;
        }

        return response()->json([$all_types_work, count($total_results)]);
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
            $type_work = TipoTrabajo::create([
                'numero' => $request['numero'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($type_work);
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
        $type_work = DB::select('select id from tipos_trabajo where numero like '."'$request->number'");
        return count($type_work) !== 0 ? response()->json(true) : response()->json(false);
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
            $type_work = TipoTrabajo::find($request['id']);
            $type_work->numero = $request['numero'];
            $type_work->nombre = $request['nombre'];
            $type_work->save();
            return response()->json($type_work);
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
            foreach ($request['type_work'] as $type_work) {
                $item = TipoTrabajo::find($type_work['id']);
                $item->delete();
            }
        } catch (\Exception $exception) {
            return $exception;
        }
        return response()->json();
    }
}
