<?php

namespace App\Http\Controllers;

use App\Models\Gestionable;
use App\Models\Gestionable_Obra;
use App\Models\Obra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GestionableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestionables = Gestionable::all();
        foreach ($gestionables as $gestionable) {
            $gestionable->obras;
            foreach ($gestionable->obras as $obra) {
                $obra->autores;
                $obra->ventas;
                $obra->expediente->obras;
                foreach ($obra->expediente->obras as $obra) {
                    $obra->tipoTrabajo;
                    $obra->ventas;
                }
            }
        }
        return response()->json($gestionables);
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
            $gestionable = Gestionable::create([
                'titulo' => $request['titulo'],
                'eslogan' => $request['eslogan'],
            ]);
            if ($request->obras_list !== [null]) {
                $obras = $request->obras_list;
                foreach ($obras as $obra) {
                    Gestionable_Obra::create([
                        "gestionable_id" => $gestionable->id,
                        "obra_id" => $obra,
                        "portada" => 'direccion de la portada'
                    ]);
                }
            }
            return response()->json($gestionable);
        } catch (\Exception $exception) {
            return $exception;
        }
    }
    /* public function storeMockups($request, $i)
    {
        try {

            if (gettype($request['mockups'][$i]) == "object") {

                return $request->file('mockups')[$i]->store('carrusel', 'public');
            } else if ($request['mockups'][$i] !== null) {
                return $request['mockups'][$i];
            } else return '';
        } catch (\Exception $exception) {
            return $exception;
        }
    } */
    public function updateCabecera(Request $request)
    {
        try {
            $gestionable = Gestionable::find($request['id']);
            $gestionable->titulo = $request['titulo'];
            $gestionable->eslogan = $request['eslogan'];
            $gestionable->save();
            return response()->json($gestionable);
        } catch (\Exception $exception) {
            return $exception;
        }
    }


    public function updateCarrusel(Request $request)
    {
        try {
            $gestionable = Gestionable::find($request['id']);
            $gestionable->titulo_carrusel = $request['titulo_carrusel'];
            $gestionable->save();
            for ($i = count($gestionable->obras()->get()) - 1; $i >= 0; $i--) {
                $gestionable->obras()->get()[$i]->pivot->delete();
            }
            $obras = $request->obras_list;
            if ($obras !== [null]) {
                for ($i = 0; $i < count($obras); $i++) {
                    $ob = Obra::find($obras[$i]);
                    if ($ob->portada !== null) {
                        Gestionable_Obra::create([
                            "gestionable_id" => $gestionable->id,
                            "obra_id" => $obras[$i],
                            "portada" => $ob->portada,
                        ]);
                    }else {
                        Gestionable_Obra::create([
                            "gestionable_id" => $gestionable->id,
                            "obra_id" => $obras[$i],
                            "portada" => '',
                        ]);
                    }

                }
            }
            return response()->json($gestionable);
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
    }
}
/* public function updateCarrusel(Request $request)
    {
        try {
            $gestionable = Gestionable::find($request['id']);
            for ($i = count($gestionable->obras()->get()) - 1; $i >= 0; $i--) {
                Storage::disk('public')->delete($gestionable->obras()->get()[$i]->pivot->portada);
                $gestionable->obras()->get()[$i]->pivot->delete();
            }
            $obras = $request->obras_list;
            if ($obras !== [null]) {
                for ($i = 0; $i < count($obras); $i++) {
                    Gestionable_Obra::create([
                        "gestionable_id" => $gestionable->id,
                        "obra_id" => $obras[$i],
                        "portada" => self::storeMockups($request, $i),
                    ]);
                }
            }
            return response()->json($gestionable);
        } catch (\Exception $exception) {
            return $exception;
        }
    } */
