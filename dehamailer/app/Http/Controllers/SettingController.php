<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
	/*
	 * Display a listing of setting.
	 *
	 * @return Response
	 */
	public function index() {
		return view('setting');
	}
}
