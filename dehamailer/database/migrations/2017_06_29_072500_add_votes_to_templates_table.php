<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('templates', function (Blueprint $table) {
            $table->string('template_subject')->nullable();
            $table->string('template_content')->nullable();
            $table->string('template_file')->nullable();
            $table->string('template_attachment')->nullable();
            $table->string('template_mail_cc')->nullable();
            $table->string('template_status')->nullable();
            $table->integer('template_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('templates', function (Blueprint $table) {
            //
        });
    }
}
