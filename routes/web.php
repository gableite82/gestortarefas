<?php

use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        FacadesDB::connection()->getPdo();
        echo "Conexão efetuada com successo: ->" . FacadesDB::connection()->getDatabaseName();
    } catch (\Throwable $e) {
        die('Não foi possivél conectar a base de dados. ERROR: ' . $e->getMessage());
    }
});
