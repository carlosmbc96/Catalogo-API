<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdiomaController extends Controller
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
        $all_languages = [];
        if ($limit === null) {
            $languages = DB::select('select id, nombre,numero from idiomas');
            return response()->json($languages);
        } else {
            $languages = DB::select('select id, nombre from idiomas where nombre like '."'%$filter%'".' ORDER BY nombre '.$order.' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select('select id, nombre from idiomas where nombre like '."'%$filter%'".' ORDER BY nombre '.$order
        );
        foreach ($languages as $language) {
            array_push($all_languages, Idioma::find($language->id));
        }
        foreach ($all_languages as $language) {
            $language->obras;
        }

        return response()->json([$all_languages, count($total_results)]);
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
            $language = Idioma::create([
                'numero' => $request['numero'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($language);
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
        $language = DB::select('select id from idiomas where numero like '."'$request->number'");
        return count($language) !== 0 ? response()->json(true) : response()->json(false);
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
            $language = Idioma::find($request['id']);
            $language->numero = $request['numero'];
            $language->nombre = $request['nombre'];
            $language->save();
            return response()->json($language);
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
            foreach ($request['language'] as $language) {
                $item = Idioma::find($language['id']);
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
