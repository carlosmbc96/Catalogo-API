<?php

namespace App\Http\Controllers;

use App\Models\PublicoEbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicoEbookController extends Controller
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
        $all_publicos = [];
        if ($limit === null) {
            $publicos = DB::select('select id, nombre from publicos_ebook');
            return response()->json($publicos);
        } else {
            $publicos = DB::select('select id, nombre from publicos_ebook where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from publicos_ebook where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($publicos as $publico) {
            array_push($all_publicos, PublicoEbook::find($publico->id));
        }
        foreach ($all_publicos as $publico) {
            $publico->obras;
        }

        return response()->json([$all_publicos, count($total_results)]);
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
            $publico = PublicoEbook::create([
                'nombre' => $request['nombre'],
            ]);
            return response()->json($publico);
        } catch (\Exception $exception) {
            return $exception;
        }
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
            $publico = PublicoEbook::find($request['id']);
            $publico->nombre = $request['nombre'];
            $publico->save();
            return response()->json($publico);
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
            foreach ($request['publico'] as $publico) {
                $item = PublicoEbook::find($publico['id']);
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
