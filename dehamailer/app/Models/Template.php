<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Template extends Model {
    /**
     * The table associated with the extends.
     *
     * @var string
     */
    protected $table = 'templates';
    protected $primaryKey = 'template_id';
    
    /*
     * Get a listing of templates with condition
     *
     * @return array Response
     */
    protected function getList() {
        return $this->where('template_deleted', '=', 0)->paginate(10);
    }

    /*
     * Add one record into templates table]
     *
     * @param array Data import
     * @return int template_id
     */
    protected function addNewRecord($data) {
        unset($data['_token']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['template_deleted'] = 0;
        return $this->insertGetId($data);
    }
    
    /*
     * Delete item of templates table
     * 
     * @param int template_id
     */
    protected function deleteTemplate($template_id) {
        $this->where('template_id', $template_id)
                    ->update(['template_deleted' => 1]);
    }

    protected function editRecord($data) {
        unset($data['_token']);
        $data['updated_at'] = date('Y-m-d H:i:s');
        $this->where('template_id', $data['template_id'])
            ->update($data);
    }
}

?>