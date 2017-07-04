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
}

?>