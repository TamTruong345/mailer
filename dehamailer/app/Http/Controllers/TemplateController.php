<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Flash;

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
        flash('Add template success!');
        return redirect()->route('template.index');
    }

    /*
     * Destroy template
     *
     * @param int template_id
     */
    public function destroy($template_id) {
        Template::deleteTemplate($template_id);
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
