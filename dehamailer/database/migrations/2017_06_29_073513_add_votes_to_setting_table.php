<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setting', function (Blueprint $table) {
            $table->string('setting_host')->nullable();
            $table->string('setting_port')->nullable();
            $table->string('setting_username')->nullable();
            $table->string('setting_mail_send')->nullable();
            $table->string('setting_password')->nullable();
            $table->string('setting_reply_to')->nullable();
            $table->string('setting_mail_per_day')->nullable();
            $table->string('setting_time_interval')->nullable();
            $table->integer('setting_deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting', function (Blueprint $table) {
            //
        });
    }
}
