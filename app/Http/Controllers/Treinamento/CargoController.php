<?php

namespace App\Http\Controllers\Treinamento;

use App\Models\Treinamento\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;


class CargoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('treinamento.cargos.index');  
      $cargos = Cargo::select('id','nome_cargo');
     return DataTables::of($cargos)->make(true);      
    }

    function getdata()
    {
     $cargos = Cargo::select('id','nome_cargo');
     return DataTables::of($cargos)->make(true);

     return Datatables::of($cargos)
            ->addColumn('action', function ($cargo) {
                return '<a href="#edit-'.$cargo->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);

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

    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->parameters([
                        'buttons' => ['excel'],
                    ]);
    }


            
}


