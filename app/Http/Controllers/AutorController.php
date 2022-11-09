<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AutorController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit;
        $page = $request->page;
        $order = $request->order;
        $filter = $request->filter;
        $all_authors = [];
        if ($limit === null) {
            $authors = DB::select('select id, nombre, correo from autores');
            return response()->json($authors);
        } else {
            $authors = DB::select('select id, nombre from autores where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order . ' LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit);
            $total_results = DB::select(
                'select id, nombre from autores where nombre like ' . "'%$filter%'" . ' ORDER BY nombre ' . $order
            );
            foreach ($authors as $author) {
                array_push($all_authors, Autor::find($author->id));
            }
            foreach ($all_authors as $author) {
                $author->obras;
                foreach ($author->obras as $obra) {
                    $obra->tipoTrabajo;
                }
            }

            return response()->json([$all_authors, count($total_results)]);
        }
    }

    public function store(Request $request)
    {
        try {
            $autor = Autor::create([
                'fecha_nacimiento' => $request['fecha_nacimiento'],
                'nombre' => $request['nombre'],
                'biografia' => $request['biografia'],
                'peq_biografia' => $request['peq_biografia'],
                'correo' => $request['correo'],
                'redes' => $request['redes'],
            ]);
            $auth = Autor::find($autor->id);
            $auth->perfil =  self::storeImageCreate($request, $autor);
            $auth->save();
            return response()->json($autor);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function update(Request $request)
    {
        try {
            $autor = Autor::find($request['id']);
            $autor->fecha_nacimiento = $request['fecha_nacimiento'];
            $autor->nombre = $request['nombre'];
            $autor->biografia = $request['biografia'];
            $autor->peq_biografia = $request['peq_biografia'];
            $autor->correo = $request['correo'];
            $autor->redes = $request['redes'];
            $autor->perfil = self::storeImage($request);
            $autor->save();
            return response()->json($autor);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function destroy(Request $request)
    {
        try {
            foreach ($request['autor'] as $autor) {
                $item = Autor::find($autor['id']);
                if (count($item->obras()->get()) !== 0) {
                    for ($i = count($item->obras()->get()) - 1; $i >= 0; $i--) {
                        $item->obras()->get()[$i]->pivot->delete();
                    }
                }
                if ($item->perfil !== null) {
                    Storage::disk('public')->delete($item->perfil);
                }
                $item->delete();
            }
        } catch (\Exception $exception) {
            return $exception;
        }
        return response()->json();
    }
    public function getAuthorByName($input)
    {

        try {
            $authors = [];
            if ($input !== null) {
                $authors = DB::select('select id, nombre from autores where nombre LIKE ' . "'%$input%'");
            }
        } catch (\Exception $exception) {
            return $exception;
        }
        return response()->json($authors);
    }
    public function storeImage($request)
    {
        $autor = Autor::find($request['id']);
        if ($request->hasFile('perfil')) {
            if ($autor->perfil !== null) {
                Storage::disk('public')->delete($autor->perfil);
            }
            return $request->file('perfil')->store('autores', 'public');
        } else if ($request['perfil'] !== null) {
            return  $autor->perfil;
        } else {
            if ($autor->perfil !== null) {
                Storage::disk('public')->delete($autor->perfil);
            }
            return null;
        }
    }
    public function storeImageCreate($request, $autor)
    {
        if ($request->hasFile('perfil')) {
            if ($autor->perfil !== null) {
                Storage::disk('public')->delete($autor->perfil);
            }
            return $request->file('perfil')->store('autores', 'public');
        } else if ($request['perfil'] !== null) {
            return  $autor->perfil;
        } else {
            if ($autor->perfil !== null) {
                Storage::disk('public')->delete($autor->perfil);
            }
            return null;
        }
    }
}
