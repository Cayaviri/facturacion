<?php

namespace Database\Seeders;

use App\Models\Consumidores;
use App\Models\Documentos;
use App\Models\Estadocivil;
use App\Models\Estados;
use App\Models\Liberaciones;
use App\Models\Mediciones;
use App\Models\Servicios;
use App\Models\Sexo;
use App\Models\Suministros;
use App\Models\User;
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

        //table Users
        $usuarios = [
            ["admin", "admin@admin.com", "123"]
        ];
        foreach ($usuarios as $user) {
            User::create(["name" => $user[0], "email" => $user[1], "password" => bcrypt($user[2])]);
        }


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
            Estadocivil::create(["idEstadocivil" => $estado_civil[0], "estDescripcion" => $estado_civil[1]]);
        }

        //Tabla sexo
        $sexos = [
            ["M", "Masculino"],
            ["F", "Femenino"],
            ["X", "Sin datos"]
        ];
        foreach ($sexos as $sexo) {
            Sexo::create(["idSexo" => $sexo[0], "sexDescripcion" => $sexo[1]]);
        }

        //Tabla servicios
        $servicios = [
            [1, 'Energía Eléctrica', '01-07-21', 'Migracion'],
            [2, 'TV Cable', '01-07-21', 'Migracion'],
            [3, 'Internet', '01-07-21', 'Migracion']
        ];
        foreach ($servicios as $servicio) {
            Servicios::create(["idServicio" => $servicio[0], "serDescripcion" => $servicio[1], "serFecha" => $servicio[2], "serUsuario" => $servicio[3]]);
        }

        //Tabla suministros (tipos)
        $suministros = [
            ["BT", 1, "Baja Tensión"],
            ["MT", 1, "Media Tensión"],
            ["TV", 2, "TV Cable"],
            ["IN", 3, "Internet"]
        ];
        foreach ($suministros as $suministro) {
            Suministros::create(["idSuministro" => $suministro[0], "idServicio" => $suministro[1], "sumDescripcion" => $suministro[2]]);
        }

        //Tabla consumidores
        $consumidores = [
            ["M", 1, "Monofásico"],
            ["T", 1, "Trifásico"],
            ["C", 2, "TV Cable"],
            ["I", 3, "Internet"]
        ];
        foreach ($consumidores as $consumidor) {
            Consumidores::create(["idConsumidor" => $consumidor[0], "idServicio" => $consumidor[1], "conDescripcion" => $consumidor[2]]);
        }

        //Tabla mediciones
        $mediciones = [
            ["PRI", 1, "Primaria"],
            ["SEC", 1, "Secundaria"],
            ["TVC", 2, "TV Cable"],
            ["INT", 3, "Internet"]
        ];
        foreach ($mediciones as $medicion) {
            Mediciones::create(["idMedicion" => $medicion[0], "idServicio" => $medicion[1], "medDescripcion" => $medicion[2]]);
        }

        //Tabla liberaciones
        $liberaciones = [
            [0, "Ninguno", 1],
            [1, "Sin Alumbrado-Aseo", 1],
            [2, "Sin Alumbrado", 1],
            [3, "Sin Aseo", 1],
            [4, "Ninguno", 2],
            [5, "Ninguno", 3]
        ];
        foreach ($liberaciones as $liberacion) {
            Liberaciones::create(["idLiberacion" => $liberacion[0], "libDescripcion" => $liberacion[1], "idServicio" => $liberacion[2]]);
        }

        //Tabla estados (estado del abonado)
        $estados = [
            ["X", "Sin Conexión"],
            ["N", "Normal"],
            ["S", "Suspendido"],
            ["R", "Retirado"]
        ];
        foreach ($estados as $estado){
            Estados::create(["idEstado"=>$estado[0], "estDescripcion"=>$estado[1]]);
        }






    }
}
