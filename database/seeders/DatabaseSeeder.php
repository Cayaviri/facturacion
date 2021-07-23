<?php

namespace Database\Seeders;

use App\Models\Documentos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $documentos = [
            ["CID", "NIT", "PER", "PAS", "INV"],
            ["Cedula identidad", "Numero Identificacion Tributaria", "Personeria Juridica", "Pasaporte", "Sin Documento"]
        ];
        //Documentos::create(["idDocumento"=>"CID", "docDescripcion"=>"Cedula identidad"]);
        for($i=0; $i<count($documentos[0]); $i++){
            Documentos::create(["idDocumento"=>$documentos[0][$i], "docDescripcion"=>$documentos[1][$i]]);
        };
    }
}
