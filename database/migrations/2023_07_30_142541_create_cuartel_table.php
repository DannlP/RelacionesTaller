<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuartelTable extends Migration
{
    public function up()
    {
        Schema::create('cuarteles', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_c');
            $table->string('Ubic_c');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuarteles');
    }
}
