<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Tipo_TrabajoSeeder::class);
        $this->call(ClasificacionSeeder::class);
        // $this->call(ExpedienteSeeder::class);
        // $this->call(ObraSeeder::class);
        // $this->call(AutorSeeder::class);
        // $this->call(Autor_ObraSeeder::class);
        $this->call(TematicaSeeder::class);
        // $this->call(Obra_TematicaSeeder::class);
        $this->call(GeneroSeeder::class);
        // $this->call(Genero_ObraSeeder::class);
        $this->call(Tipo_LibroSeeder::class);
        // $this->call(Obra_Tipo_LibroSeeder::class);
        $this->call(GrupoSeeder::class);
        // $this->call(CartulinaSeeder::class);
        // $this->call(PapelSeeder::class);
        $this->call(IdiomaSeeder::class);
        $this->call(ClasificadorSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(VentaSeeder::class);
        $this->call(GestionableSeeder::class);
        // $this->call(Gestionable_ObraSeeder::class);
        // $this->call(Cartulina_ObraSeeder::class);
        // $this->call(Clasificador_ObraSeeder::class);
        // $this->call(Grupo_ObraSeeder::class);
        // $this->call(Idioma_ObraSeeder::class);
        // $this->call(Obra_PapelSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PublicoEbookSeeder::class);
        $this->call(PublicoAudiolibroSeeder::class);
    }
}
