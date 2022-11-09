<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tematica;
use Illuminate\Support\Facades\DB;

class TematicaController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit;
        $page = $request->page;
        $order = $request->order;
        $filter = $request->filter;
        $all_tematics = [];
        if ($limit === null) {
            $tematics = DB::select(
                'select id, nombre, numero from tematicas'
            );
            return response()->json($tematics);
        }else{
            $tematics = DB::select('select id, nombre from tematicas where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order . ' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
        $total_results = DB::select(
            'select id, nombre from tematicas where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order
        );
        foreach ($tematics as $tematic) {
            array_push($all_tematics, Tematica::find($tematic->id));
        }
        foreach ($all_tematics as $tematic) {
            $tematic->obras;
        }

        return response()->json([$all_tematics, count($total_results)]);
        }

    }

    public function store(Request $request)
    {
        try {
            $tematic = Tematica::create([
                'numero' => $request['numero'],
                'nombre' => $request['nombre'],
            ]);
            return response()->json($tematic);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
    public function IsUniqueByNumber(Request $request)
    {
        $tematic = DB::select('select id from tematicas where numero like '."'$request->number'");
        return count($tematic) !== 0 ? response()->json(true) : response()->json(false);
    }

    public function update(Request $request)
    {
        try {
            $tematic = Tematica::find($request['id']);
            $tematic->numero = $request['numero'];
            $tematic->nombre = $request['nombre'];
            $tematic->save();
            return response()->json($tematic);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function destroy(Request $request)
    {
        try {
            foreach ($request['tematic'] as $tematic) {
                $item = Tematica::find($tematic['id']);
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
