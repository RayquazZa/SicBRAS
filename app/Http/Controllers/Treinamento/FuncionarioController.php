<?php

namespace App\Http\Controllers\Treinamento;


use App\Models\Treinamento\Funcionario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator; 


class FuncionarioController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::latest()->paginate(10);

        $cargos = \App\Models\Treinamento\Cargo::all(); 
        return view('treinamento.funcionarios.index', compact
            ('funcionarios','cargos','cetors','departamentos'))
            ->with('i', (request()->input('page', 1 ) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treinamento.funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'email' => 'unique:email_funcionario',
    ]);

    if ($validator->fails()) {
        return redirect('funcionarios.index')
                        ->withErrors($validator)
                        ->withInput();
    }

    // continua e persiste os dados
    Funcionario::create($request->all());

    return redirect()->route('funcionarios.index')
                    ->with('success', 'Funcionario cadastrado com sucesso!');
    }


    /*public function store(Request $request)
    {
        request()->validate([
            'nome_funcionario' => 'required',
            'email_funcionario' => 'required',
            'instrutor' => 'required',
            'cargos_id' => 'required',
            'situacao' => 'required',
            
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionarios.index')
                    ->with('success', 'Funcionario cadastrado com sucesso!');

    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        return view('treinamento.funcionarios.show',compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        return view('treinamento.funcionarios.edit',compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        request()->validate([
            'nome_funcionario' => 'required',
        ]);


        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')
                    ->with('success', 'Funcionario Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cetor  $cetor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();

        return redirect()->route('funcionarios.index')
                        ->with('success', 'Funcionario Deletado com Sucesso!');
    }
}
