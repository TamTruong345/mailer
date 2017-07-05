<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Flash;

class CustomerController extends Controller
{
	/*
	 * Display a listing of customer.
	 *
	 * @return Response
	 */
	public function index() {
        $customers = Customer::getList();
		return view('customers.index', array('customers' => $customers));
	}

	public function store(Request $request)
    {
        $data = $request->toArray();
        Customer::addNewRecord($data);
        flash('Add customer success!');
        return redirect()->route('customer.index');
    }

}
