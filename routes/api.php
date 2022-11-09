<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\TematicaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\TipoLibroController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\TipoTrabajoController;
use App\Http\Controllers\CartulinaController;
use App\Http\Controllers\PapelController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\ClasificadorController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\GestionableController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PublicoEbookController;
use App\Http\Controllers\PublicoAudiolibroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Rutas Free
//Login
Route::post("/login", [AuthController::class, 'login']);
Route::post("/restore_account", [AuthController::class, 'restore']);
Route::post("/update_password", [AuthController::class, 'update_password']);
//Autores
Route::post('/autores', [AutorController::class, 'index']);
Route::get('/autores/filtrarPorNombre/{input}', [AutorController::class, 'getAuthorByName']);
//Obras
Route::post('/obras', [ObraController::class, 'index']);
Route::post('/obras/filtrarObras', [ObraController::class, 'filtersObras']);
Route::post('/obras/obraAutores', [ObraController::class, 'getAuthorsByObraId']);
Route::post('/obras/subirIlustraciones', [ObraController::class, 'storeImages']);
//Tematicas
Route::post('/tematicas', [TematicaController::class, 'index']);
//Tipos Trabajo
Route::post('/tiposTrabajo', [TipoTrabajoController::class, 'index']);
//Elementos gestionables del catalogo
Route::get('/elementosInterfaz', [GestionableController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    //Usuarios
    Route::get('/auth', [AuthController::class, 'checkToken']);
    Route::post('/users', [AuthController::class, 'index']);
    Route::post('/users/crear', [AuthController::class, 'register']);
    Route::put('/users/editar', [AuthController::class, 'update']);
    Route::post('/users/eliminar', [AuthController::class, 'destroy']);
    Route::post('/users/existe', [AuthController::class, 'IsUniqueEmail']);

    //Roles
    Route::post('/rols', [RolController::class, 'index']);
    Route::post('/rols/crear', [RolController::class, 'store']);
    Route::put('/rols/editar', [RolController::class, 'update']);
    Route::post('/rols/eliminar', [RolController::class, 'destroy']);

    //Permisos
    Route::post('/permissions', [PermissionController::class, 'index']);

    //Obras
    Route::post('/obras/crear', [ObraController::class, 'store']);
    Route::post('/obras/editar', [ObraController::class, 'update']);
    Route::post('/obras/eliminar', [ObraController::class, 'destroy']);
    Route::post('/obras/crearAutores', [ObraController::class, 'storeAuthors']);
    Route::post('/obras/editarPortada', [ObraController::class, 'updatePortada']);

    //Autores
    Route::post('/autores/crear', [AutorController::class, 'store']);
    Route::post('/autores/editar', [AutorController::class, 'update']);
    Route::post('/autores/eliminar', [AutorController::class, 'destroy']);

    //Tematicas
    Route::post('/tematicas/crear', [TematicaController::class, 'store']);
    Route::put('/tematicas/editar', [TematicaController::class, 'update']);
    Route::post('/tematicas/eliminar', [TematicaController::class, 'destroy']);
    Route::post('/tematicas/existe', [TematicaController::class, 'IsUniqueByNumber']);

    //Cartulinas
    Route::post('/cartulinas', [CartulinaController::class, 'index']);
    Route::post('/cartulinas/crear', [CartulinaController::class, 'store']);
    Route::put('/cartulinas/editar', [CartulinaController::class, 'update']);
    Route::post('/cartulinas/eliminar', [CartulinaController::class, 'destroy']);
    Route::post('/cartulinas/existe', [CartulinaController::class, 'IsUniqueByNumber']);

    //Papeles
    Route::post('/papeles', [PapelController::class, 'index']);
    Route::post('/papeles/crear', [PapelController::class, 'store']);
    Route::put('/papeles/editar', [PapelController::class, 'update']);
    Route::post('/papeles/eliminar', [PapelController::class, 'destroy']);
    Route::post('/papeles/existe', [PapelController::class, 'IsUniqueByNumber']);

    //Grupos
    Route::post('/grupos', [GrupoController::class, 'index']);
    Route::post('/grupos/crear', [GrupoController::class, 'store']);
    Route::put('/grupos/editar', [GrupoController::class, 'update']);
    Route::post('/grupos/eliminar', [GrupoController::class, 'destroy']);
    Route::post('/grupos/existe', [GrupoController::class, 'IsUniqueByNumber']);

    //Generos
    Route::post('/generos', [GeneroController::class, 'index']);
    Route::post('/generos/crear', [GeneroController::class, 'store']);
    Route::put('/generos/editar', [GeneroController::class, 'update']);
    Route::post('/generos/eliminar', [GeneroController::class, 'destroy']);
    Route::post('/generos/existe', [GeneroController::class, 'IsUniqueByNumber']);

    //Tipos de Libro
    Route::post('/tiposLibro', [TipoLibroController::class, 'index']);
    Route::post('/tiposLibro/crear', [TipoLibroController::class, 'store']);
    Route::put('/tiposLibro/editar', [TipoLibroController::class, 'update']);
    Route::post('/tiposLibro/eliminar', [TipoLibroController::class, 'destroy']);
    Route::post('/tiposLibro/existe', [TipoLibroController::class, 'IsUniqueByNumber']);

    //Tipos de Trabajo
    Route::post('/tiposTrabajo/crear', [TipoTrabajoController::class, 'store']);
    Route::put('/tiposTrabajo/editar', [TipoTrabajoController::class, 'update']);
    Route::post('/tiposTrabajo/eliminar', [TipoTrabajoController::class, 'destroy']);
    Route::post('/tiposTrabajo/existe', [TipoTrabajoController::class, 'IsUniqueByNumber']);

    //Expedientes
    Route::post('/expedientes', [ExpedienteController::class, 'index']);
    Route::post('/expedientes/crear', [ExpedienteController::class, 'store']);
    Route::put('/expedientes/editar', [ExpedienteController::class, 'update']);
    Route::post('/expedientes/eliminar', [ExpedienteController::class, 'destroy']);

    //Idiomas
    Route::post('/idiomas', [IdiomaController::class, 'index']);
    Route::post('/idiomas/crear', [IdiomaController::class, 'store']);
    Route::put('/idiomas/editar', [IdiomaController::class, 'update']);
    Route::post('/idiomas/eliminar', [IdiomaController::class, 'destroy']);
    Route::post('/idiomas/existe', [IdiomaController::class, 'IsUniqueByNumber']);

    //Clasificadores
    Route::post('/clasificadores', [ClasificadorController::class, 'index']);
    Route::post('/clasificadores/crear', [ClasificadorController::class, 'store']);
    Route::put('/clasificadores/editar', [ClasificadorController::class, 'update']);
    Route::post('/clasificadores/eliminar', [ClasificadorController::class, 'destroy']);
    Route::post('/clasificadores/existe', [ClasificadorController::class, 'IsUniqueByNumber']);

    //Clasificaciones
    Route::post('/clasificaciones', [ClasificacionController::class, 'index']);
    Route::post('/clasificaciones/crear', [ClasificacionController::class, 'store']);
    Route::put('/clasificaciones/editar', [ClasificacionController::class, 'update']);
    Route::post('/clasificaciones/eliminar', [ClasificacionController::class, 'destroy']);
    Route::post('/clasificaciones/existe', [ClasificacionController::class, 'IsUniqueBySiglas']);

    //Ventas
    Route::post('/ventas', [VentaController::class, 'index']);
    Route::post('/ventas/crear', [VentaController::class, 'store']);
    Route::put('/ventas/editar', [VentaController::class, 'update']);
    Route::post('/ventas/eliminar', [VentaController::class, 'destroy']);
    Route::post('/ventas/existe', [VentaController::class, 'IsUniqueByName']);

    //Elementos gestionables del catalogo
    Route::post('/elementosInterfaz/editarCabecera', [GestionableController::class, 'updateCabecera']);
    Route::post('/elementosInterfaz/editarCarrusel', [GestionableController::class, 'updateCarrusel']);

    //Usuarios De Entrega
    Route::post('/usuariosObra', [UsuarioController::class, 'index']);
    Route::post('/usuariosObra/crear', [UsuarioController::class, 'store']);
    Route::put('/usuariosObra/editar', [UsuarioController::class, 'update']);
    Route::post('/usuariosObra/eliminar', [UsuarioController::class, 'destroy']);


    //Publico Ebook
    Route::post('/publicosEbook', [PublicoEbookController::class, 'index']);
    Route::post('/publicosEbook/crear', [PublicoEbookController::class, 'store']);
    Route::put('/publicosEbook/editar', [PublicoEbookController::class, 'update']);
    Route::post('/publicosEbook/eliminar', [PublicoEbookController::class, 'destroy']);

    //Publico Audiolibro
    Route::post('/publicosAudiolibro', [PublicoAudiolibroController::class, 'index']);
    Route::post('/publicosAudiolibro/crear', [PublicoAudiolibroController::class, 'store']);
    Route::put('/publicosAudiolibro/editar', [PublicoAudiolibroController::class, 'update']);
    Route::post('/publicosAudiolibro/eliminar', [PublicoAudiolibroController::class, 'destroy']);

});
