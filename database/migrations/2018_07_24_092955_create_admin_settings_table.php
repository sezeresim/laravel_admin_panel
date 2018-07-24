<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site-title');
            $table->string('site-keywords');
            $table->string('site-description');
            $table->string('site-adres');
            $table->integer('telephone');
            $table->string('general-mail');
            $table->string('adress');
            $table->string('il');
            $table->string('ilce');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('insta');
            $table->string('youtube');
            $table->string('username')->nullable();;
            $table->string('password');
            $table->string('smtphost');
            $table->string('smtpport');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_settings');
    }
}
