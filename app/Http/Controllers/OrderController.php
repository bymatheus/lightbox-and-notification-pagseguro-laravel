<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        return view('order.index', [
            'title'         => 'Novo pedido'
        ]);
    }

    public function store()
    {

    }
}
