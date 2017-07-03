<?php

namespace App\Http\Controllers;

use App\Models\Template;

class TemplateController extends Controller
{
    /*
     * Display a listing of templates.
     *
     * @return Response
     */
    public function index() {
        $templates = Template::getList();
        return view('templates.index', array('templates' => $templates));
    }
}
