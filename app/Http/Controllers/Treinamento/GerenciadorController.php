<?php

namespace App\Http\Controllers\Treinamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GerenciadorController extends Controller
{
  public function index()
  {
      return view('treinamento.gerenciador');
  }
}



