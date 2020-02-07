<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller {
    public function prueba($param)
    {
        return 'Estoy dentro de prueba controler :D y recibí este parametro'. $param;
    }
}
