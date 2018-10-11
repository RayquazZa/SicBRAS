<?php

namespace App\Http\Controllers\Qualidade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qualidade\Pedido_CLiente;

class PedidoControler extends Controller
{
    public function index()
    {
        return view('qualidade.pedido.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('qualidade.pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'revisao' => 'required',
            'data' => 'required',
            'cd_pedido' => 'required',
            'cliente_idcliente' => 'required',

        ]);

        Pedido_CLiente::create($request->all());

        return redirect()->route('pedido.index')->with('success', 'Pedido Cadastrado com Sucesso!');

    }
}
