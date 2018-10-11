<?php

namespace App\Http\Controllers\Qualidade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnaliseGranulController extends Controller
{
    public function index()
  {
      return view('qualidade.analise.index');
  }
}
