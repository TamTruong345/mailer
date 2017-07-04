<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    protected $errors = [];
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /*
     * Display a listing of templates.
     *
     * @return Response
     */
    public function index() {
        $templates = Template::getList();
        return view('templates.index', array('templates' => $templates));
    }

    /*
     * Store a new template
     *
     * @return Response
     */
    public function store() {
        $data = $this->request->toArray();
        $filePath = $this->uploadFileAttachment();
        $data['template_attachment'] = $filePath;
        Template::addNewRecord($data);
        return redirect()->route('template.index');
    }

    /*
     * Store a file upload
     * 
     * @return string path
     */
    private function uploadFileAttachment() {
        if (!$this->isValidFileUpload()) {
            return '';
        }
        $extension = $this->request->file('template_attachment')->extension();
        $path = $this->request->file('template_attachment')->storeAs(
            'templates', date('YmdHis').".$extension"
        );
        return $path;
    }

    /*
     * Validate file upload
     *
     * @return boolean
     */
    private function isValidFileUpload() {
        if ( !$this->request->hasFile('template_attachment') ) {
            return false;
        }
        if ( !$this->request->file('template_attachment')->isValid() ) {
            return false;
        }
        return true;
    }
}
