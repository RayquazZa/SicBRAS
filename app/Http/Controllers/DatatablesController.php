<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;
use Yajra\Datatables\Datatables;


class DatatablesController extends Controller
{
		    /**
		 * Displays datatables front end view
		 *
		 * @return \Illuminate\View\View
		 */
		public function getIndex()
		{
		    return view('treinamento.index');
		}

		/**
		 * Process datatables ajax request.
		 *
		 * @return \Illuminate\Http\JsonResponse
		 */
		public function anyData()
		{
		    return treinamento::of(User::query())->make(true);
		}
}
