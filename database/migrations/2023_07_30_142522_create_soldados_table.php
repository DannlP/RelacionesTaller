<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldadosTable extends Migration
{
    public function up()
    {
        Schema::create('soldados', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_s');
            $table->string('Apell_s');
            $table->string('Grado_s');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('soldados');
    }
}
