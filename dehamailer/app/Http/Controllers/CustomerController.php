<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
	/*
	 * Display a listing of customer.
	 *
	 * @return Response
	 */
	public function index() {
		$customers = DB::table('customers')->get();
		return view('customers.index', array('customers' => $customers));
	}
}
