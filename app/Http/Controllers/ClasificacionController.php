<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClasificacionController extends Controller
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
        $all_clasifications = [];
        if ($limit === null) {
            $clasifications = DB::select('select id, nombre, siglas from clasificaciones');
            return response()->json($clasifications);
        } else {
            $clasifications = DB::select('select id, nombre from clasificaciones where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from clasificaciones where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($clasifications as $clasification) {
            array_push($all_clasifications, Clasificacion::find($clasification->id));
        }
        foreach ($all_clasifications as $clasification) {
            $clasification->obras;
        }

        return response()->json([$all_clasifications, count($total_results)]);
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
            $clasification = Clasificacion::create([
                'siglas' => $request['siglas'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($clasification);
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
    public function IsUniqueBySiglas(Request $request)
    {
        $clasification = DB::select('select id from clasificaciones where siglas like '."'$request->siglas'");
        return count($clasification) !== 0 ? response()->json(true) : response()->json(false);
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
            $clasification = Clasificacion::find($request['id']);
            $clasification->siglas = $request['siglas'];
            $clasification->nombre = $request['nombre'];
            $clasification->save();
            return response()->json($clasification);
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
            foreach ($request['clasification'] as $clasification) {
                $item = Clasificacion::find($clasification['id']);
                $item->delete();
            }
        } catch (\Exception $exception) {
            return $exception;
        }
        return response()->json();
    }
}
