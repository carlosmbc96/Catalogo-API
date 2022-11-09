<?php

namespace App\Http\Controllers;

use App\Models\TipoLibro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoLibroController extends Controller
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
        $all_types_book = [];
        if ($limit === null) {
            $types_book = DB::select('select id, nombre, numero from tipos_libro');
            return response()->json($types_book);
        } else {
            $types_book = DB::select('select id, nombre from tipos_libro where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from tipos_libro where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($types_book as $type_book) {
            array_push($all_types_book, TipoLibro::find($type_book->id));
        }
        foreach ($all_types_book as $type_book) {
            $type_book->obras;
        }

        return response()->json([$all_types_book, count($total_results)]);
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
            $type_book = TipoLibro::create([
                'numero' => $request['numero'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($type_book);
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
        $type_book = DB::select('select id from tipos_libro where numero like '."'$request->number'");
        return count($type_book) !== 0 ? response()->json(true) : response()->json(false);
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
            $type_book = TipoLibro::find($request['id']);
            $type_book->numero = $request['numero'];
            $type_book->nombre = $request['nombre'];
            $type_book->save();
            return response()->json($type_book);
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
            foreach ($request['type_book'] as $type_book) {
                $item = TipoLibro::find($type_book['id']);
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
