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

    protected function getList() {
        return DB::table('templates')->where('template_id', '=', 1)->get();
    }
}

?>