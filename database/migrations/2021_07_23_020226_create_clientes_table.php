<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\User;
use App\Cliente;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('genero');
            $table->string('nacionalidad');
            $table->string('estado_civ');
            $table->string('ocupacion');
            $table->timestamps();
        });

        // $user = User::create(['foto' => 'cliente2.jpg',
        //             'ci' => 9787542,
        //             'codigo' => 9752,
        //             'nombre' => 'ALBERTO',
        //             'apellido_pat' => 'RAMONES',
        //             'apellido_mat' => 'CASTRO',
        //             'fecha_nac' => '2021-09-01',
        //             'telefono' => 5487987,
        //             'direccion' => 'km 6, doble via a la Guardia',
        //             'latitud' => '5487987sdd',
        //             'longitud' => '5487987sdd',
        //             'email' => 'user3@user.com',
        //             'password' => Hash::make('0120'),
        // ]);
        // Cliente::create([
        //     'user_id' => 4,
        //     'genero' => 'masculino',
        //     'nacionalidad' => 'nacionalidad',
        //     'estado_civ' => 'casado',
        //     'ocupacion' => 'zapatero',
        // ]);

        // $user->assignRole('cliente');

        // $user = User::create(['foto' => 'cliente1.jpg',
        //             'ci' => 9787548,
        //             'codigo' => 9722,
        //             'nombre' => 'MARIA',
        //             'apellido_pat' => 'BUSTAMANTE',
        //             'apellido_mat' => 'ARIAS',
        //             'fecha_nac' => '2021-09-08',
        //             'telefono' => 79584879,
        //             'direccion' => 'plan 3000, doble via a la Guardia',
        //             'latitud' => '5487987sdd',
        //             'longitud' => '5487987sdd',
        //             'email' => 'user4@user.com',
        //             'password' => Hash::make('0120'),
        // ]);
        // Cliente::create([
        //     'user_id' => 5,
        //     'genero' => 'femenino',
        //     'nacionalidad' => 'Boliviano',
        //     'estado_civ' => 'casada',
        //     'ocupacion' => 'Ama de casa',
        // ]);

        // $user->assignRole('cliente');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
