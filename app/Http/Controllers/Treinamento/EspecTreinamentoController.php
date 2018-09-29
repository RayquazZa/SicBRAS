<?php

namespace App\Http\Controllers\Treinamento;

use App\Models\Treinamento\EspecTreinamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EspecTreinamentoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espectreinamentos = EspecTreinamento::latest()->paginate(10);

        return view('treinamento.espectreinamentos.index',compact('espectreinamentos'))
            ->with('i', (request()->input('page', 1 ) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treinamento.espectreinamentos.create');
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
            'nome_espectreinamento' => 'required',
        ]);

        EspecTreinamento::create($request->all());

        return redirect()->route('espectreinamentos.index')
                    ->with('success', 'Especificação de Treinamento cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function show(EspecTreinamento $espectreinamento)
    {
        return view('treinamento.espectreinamentos.show',compact('espectreinamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function edit(EspecTreinamento $espectreinamento)
    {
        return view('treinamento.espectreinamentos.edit',compact('espectreinamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EspecTreinamento $espectreinamento)
    {
        request()->validate([
            'nome_espectreinamento' => 'required',
        ]);


        $espectreinamento->update($request->all());

        return redirect()->route('espectreinamentos.index')
                    ->with('success', 'Especificação de Treinamento Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(EspecTreinamento $espectreinamento)
    {
        $espectreinamento->delete();

        return redirect()->route('espectreinamentos.index')
                        ->with('success', 'Especificação de Treinamento Deletado com Sucesso!');
    }
}
