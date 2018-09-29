<?php

namespace App\Http\Controllers\Treinamento;

use App\Models\Treinamento\TpTreinamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TpTreinamentoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tptreinamentos = TpTreinamento::latest()->paginate(10);

        return view('treinamento.tptreinamentos.index',compact('tptreinamentos'))
            ->with('i', (request()->input('page', 1 ) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treinamento.tptreinamentos.create');
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
            'nome_tptreinamento' => 'required',
        ]);

        TpTreinamento::create($request->all());

        return redirect()->route('tptreinamentos.index')
                    ->with('success', 'Tipo de Treinamento cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function show(TpTreinamento $tptreinamento)
    {
        return view('treinamento.tptreinamentos.show',compact('tptreinamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function edit(TpTreinamento $tptreinamento)
    {
        return view('treinamento.tptreinamentos.edit',compact('tptreinamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TpTreinamento $tptreinamento)
    {
        request()->validate([
            'nome_tptreinamento' => 'required',
        ]);


        $tptreinamento->update($request->all());

        return redirect()->route('tptreinamentos.index')
                    ->with('success', 'Tipo de Treinamento Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tptreinamento  $tptreinamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TpTreinamento $tptreinamento)
    {
        $tptreinamento->delete();

        return redirect()->route('tptreinamentos.index')
                        ->with('success', 'Tipo de Treinamento Deletado com Sucesso!');
    }
}
