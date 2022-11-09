<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpedienteController extends Controller
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
        $all_expedients = [];
        if ($limit === null) {
            $expedients = DB::select('select id, nombre from expedientes');
            foreach ($expedients as $expedient) {
                array_push($all_expedients, Expediente::find($expedient->id));
            }
            foreach ($all_expedients as $expedient) {
                $expedient->obras;
                foreach ($expedient->obras as $literary_work) {
                    $literary_work->tipoTrabajo;
                    $literary_work->expediente;
                    $literary_work->tiposLibro;
                    $literary_work->autores;
                    $literary_work->grupos;
                    $literary_work->papeles;
                    $literary_work->cartulinas;
                    $literary_work->clasificadores;
                    $literary_work->idiomas;
                    $literary_work->generos;
                    $literary_work->tematicas;
                    $literary_work->users;
                    $literary_work->ventas;
                    $literary_work->usuarios_editorial;
                    $literary_work->publicos_ebook;
                    $literary_work->publicos_audiolibro;
                }
            }
            return response()->json($all_expedients);
        } else {
            $expedients = DB::select('select id, nombre from expedientes where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order . ' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
            $total_results = DB::select(
                'select id, nombre from expedientes where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order
            );
            foreach ($expedients as $expedient) {
                array_push($all_expedients, Expediente::find($expedient->id));
            }
            foreach ($all_expedients as $expedient) {
                $expedient->obras;
                foreach ($expedient->obras as $literary_work) {
                    $literary_work->tipoTrabajo;
                    $literary_work->expediente;
                    $literary_work->tiposLibro;
                    $literary_work->autores;
                    $literary_work->grupos;
                    $literary_work->papeles;
                    $literary_work->cartulinas;
                    $literary_work->clasificadores;
                    $literary_work->idiomas;
                    $literary_work->generos;
                    $literary_work->tematicas;
                    $literary_work->users;
                    $literary_work->ventas;
                }
            }
            return response()->json([$all_expedients, count($total_results)]);
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
            $expedient = Expediente::create([
                'nombre' => $request['nombre'],
            ]);
            return response()->json($expedient);
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
            $expedient = Expediente::find($request['id']);
            $expedient->nombre = $request['nombre'];
            $expedient->save();
            return response()->json($expedient);
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
            foreach ($request['exp'] as $expedient) {
                $item = Expediente::find($expedient['id']);
                $item->delete();
            }
        } catch (\Exception $exception) {
            return $exception;
        }
        return response()->json();
    }
}
