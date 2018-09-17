<?php

namespace App\Http\Controllers\Treinamento;

use App\Models\Treinamento\Departamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartamentoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::latest()->paginate(10);

        return view('treinamento.departamentos.index',compact('departamentos'))
            ->with('i', (request()->input('page', 1 ) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treinamento.departamentos.create');
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
            'nome_departamento' => 'required',
        ]);

        Departamento::create($request->all());

        return redirect()->route('departamentos.index')
                    ->with('success', 'Departamento cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        return view('treinamento.departamentos.show',compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        return view('treinamento.departamentos.edit',compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        request()->validate([
            'nome_departamento' => 'required',
        ]);


        $departamento->update($request->all());

        return redirect()->route('departamentos.index')
                    ->with('success', 'Departamento Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        return redirect()->route('departamentos.index')
                        ->with('success', 'Departamento Deletado com Sucesso!');
    }
}
