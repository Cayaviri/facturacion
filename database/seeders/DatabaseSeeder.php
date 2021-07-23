<?php

namespace Database\Seeders;

use App\Models\Documentos;
use App\Models\Estadocivil;
use App\Models\Sexo;
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
        //tabla Documentos
        $documentos = [
            ["CID", "Cedula Identidad"],
            ["NIT", "Numero Identificacion Tributaria"],
            ["PER", "Personeria Juridica"],
            ["PAS", "Pasaporte"],
            ["INV", "Sin Documento"]
        ];
        foreach ($documentos as $documento) {
            Documentos::create(["idDocumento" => $documento[0], "docDescripcion" => $documento[1]]);
        }

        //tabla Estadocivil
        $estados_civiles = [
            ['S', 'Soltero'],
            ['C', 'Casado'],
            ['V', 'Viudo']
        ];
        foreach ($estados_civiles as $estado_civil) {
            Estadocivil::create(["idEstadocivil"=>$estado_civil[0], "estDescripcion"=>$estado_civil[1]]);
        }

        //Tabla sexo
        $sexos = [
            ["M", "Masculino"],
            ["F", "Femenino"],
            ["X", "Sin datos"]
        ];
        foreach ($sexos as $sexo){
            Sexo::create(["idSexo"=>$sexo[0], "sexDescripcion"=>$sexo[1]]);
        }




    }
}
