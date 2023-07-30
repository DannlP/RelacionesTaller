<?php

require __DIR__.'/../vendor/autoload.php';

use App\Soldado;
use App\Servicio;
use App\Cuartel;
use App\Image;

$soldado = Soldado::create([
    'Nom_s' => 'Daniel',
    'Apell_s' => 'Lopez',
    'Grado_s' => 'Sargento',
]);

$servicio = Servicio::create([
    'Acti_ser' => 'N',
]);

$soldado->servicios()->attach($servicio);

$soldado->servicios;

$cuartel = Cuartel::create([
    'Nom_c' => 'Sena',
    'Ubic_c' => 'Popayan',
]);

$soldado->images()->create([
    'url' => 'soldado.jpg',
]);

$cuartel->images()->create([
    'url' => 'cuartel.jpg',
]);

$soldado->images;

$cuartel->images;
