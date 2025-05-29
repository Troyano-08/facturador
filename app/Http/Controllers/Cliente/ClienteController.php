<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClienteController extends Controller
{
    public function index(){

        $clientes = Cliente::get();
        return Inertia::render('Cliente/index',[
            'Clientes' => $clientes
        ]);
    }
}
