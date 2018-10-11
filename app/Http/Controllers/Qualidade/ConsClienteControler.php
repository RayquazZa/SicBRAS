<?php

namespace App\Http\Controllers\Qualidade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qualidade\Cliente;
use App\Models\Qualidade\Endereco;
use App\Models\Qualidade\Contato_Cliente;

class ConsClienteControler extends Controller
{
    public function index()
  {
      $clientes = Cliente::latest()->paginate(10);
      return view('qualidade.cliente_consulta.index',compact('clientes'))
      ->with('i', (request()->input('page', 1 ) -1) * 5);
  }
  /**
     * Display the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('qualidade.cliente_consulta.show',compact('Cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('qualidade.cliente_consulta.edit',compact('Cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
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


        $cliente->update($request->all());
        $Endereco->update($request->all());
        $Contato_Cliente->update($request->all());

        return redirect()->route('cliente_consulta.index')
                    ->with('success', 'Cliente Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        

        return redirect()->route('cliente_consulta.index')
                        ->with('success', 'Cliente Deletado com Sucesso!');
    }
}
