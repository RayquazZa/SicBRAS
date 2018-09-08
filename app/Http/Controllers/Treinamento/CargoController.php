<?php

namespace App\Http\Controllers\Treinamento;

use App\Models\Treinamento\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CargoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::latest()->paginate(10);

        return view('treinamento.cargos.index',compact('cargos'))
            ->with('i', (request()->input('page', 1 ) -1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treinamento.cargos.create');
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
            'nome_cargo' => 'required',
        ]);

        Cargo::create($request->all());

        return redirect()->route('cargos.index')
                    ->with('success', 'Cargo cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        return view('treinamento.cargos.show',compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('treinamento.cargos.edit',compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        request()->validate([
            'nome_cargo' => 'required',
        ]);


        $cargo->update($request->all());

        return redirect()->route('cargos.index')
                    ->with('success', 'Cargo Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();

        return redirect()->route('cargos.index')
                        ->with('success', 'Cargo Deletado com Sucesso!');
    }
}
