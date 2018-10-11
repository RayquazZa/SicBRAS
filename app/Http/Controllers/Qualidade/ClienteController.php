<?php

namespace App\Http\Controllers\Qualidade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qualidade\Cliente;
use App\Models\Qualidade\Endereco;
use App\Models\Qualidade\Contato_Cliente;


class ClienteController extends Controller
{
  public function index()
  {
      return view('qualidade.cliente.index');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('qualidade.cliente.create');
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
            'nome' => 'required',
            'cpf' => 'required',
            'cnpj' => 'required',
            'nm_telefone' => 'required',
            'email' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'numero' => 'required',

        ]);

       Cliente::create($request->all());
       Endereco::create($request->all());
       Contato_Cliente::create($request->all());

        return redirect()->route('cliente.index')->with('success', 'Cliente Cadastrado com Sucesso!');

    }
}
