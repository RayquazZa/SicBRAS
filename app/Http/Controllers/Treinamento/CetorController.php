<?php

namespace App\Http\Controllers\Treinamento;

use App\Models\Treinamento\Cetor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CetorController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cetors = Cetor::latest()->paginate(10);

        return view('treinamento.cetors.index',compact('cetors'))
            ->with('i', (request()->input('page', 1 ) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treinamento.cetors.create');
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
            'nome_cetor' => 'required',
        ]);

        Cetor::create($request->all());

        return redirect()->route('cetors.index')
                    ->with('success', 'Setor cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function show(Cetor $cetor)
    {
        return view('treinamento.cetors.show',compact('cetor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function edit(Cetor $cetor)
    {
        return view('treinamento.cetors.edit',compact('cetor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cetor $cetor)
    {
        request()->validate([
            'nome_cetor' => 'required',
        ]);


        $cetor->update($request->all());

        return redirect()->route('cetors.index')
                    ->with('success', 'Setor Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cetor $cetor)
    {
        $cetor->delete();

        return redirect()->route('cetors.index')
                        ->with('success', 'Setor Deletado com Sucesso!');
    }
}
