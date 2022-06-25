<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_email');
            $table->string('site_logo');
            $table->string('site_location');
            $table->string('site_slogan');
            $table->string('site_phone1');
            $table->string('site_phone2');
            $table->string('site_linkedin');
            $table->string('site_instagram');
            $table->string('site_twitter');
            $table->string('site_facebook');
            $table->string('site_youtube');
            $table->string('user_id');


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
        Schema::dropIfExists('settings');
    }
};