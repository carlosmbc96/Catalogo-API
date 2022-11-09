<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
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
        $all_sells = [];
        if ($limit === null) {
            $sells = DB::select('select id, nombre, direccion from ventas');
            return response()->json($sells);
        } else {
            $sells = DB::select('select id, nombre from ventas where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from ventas where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($sells as $sell) {
            array_push($all_sells, Venta::find($sell->id));
        }
        foreach ($all_sells as $sell) {
            $sell->obras;
        }

        return response()->json([$all_sells, count($total_results)]);
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
            $sell = Venta::create([
                'direccion' => $request['direccion'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($sell);
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
    public function IsUniqueByName(Request $request)
    {
        $sell = DB::select('select id from ventas where nombre like '."'$request->nombre'");
        return count($sell) !== 0 ? response()->json(true) : response()->json(false);
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
            $sell = Venta::find($request['id']);
            $sell->direccion = $request['direccion'];
            $sell->nombre = $request['nombre'];
            $sell->save();
            return response()->json($sell);
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
            foreach ($request['sell'] as $sell) {
                $item = Venta::find($sell['id']);
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
