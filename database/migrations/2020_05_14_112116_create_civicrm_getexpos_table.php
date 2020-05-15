<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivicrmGetexposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civicrm_getexpos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('expo_code')->unique();
            $table->dateTime('date');
            $table->string('chategory');
            $table->string('item_name_en');
            $table->string('item_name_fr');
            $table->string('expo_title_en');
            $table->string('expo_title_fr');
            $table->string('theme_en');
            $table->string('theme_fr');
            $table->string('city_en');
            $table->string('city_fr');
            $table->string('ec_name_en');
            $table->string('ec_name_fr');
            $table->string('color_code');
            $table->string('css_style');
            $table->string('c_name_en');           
            // $table->softDeletes(); //delete_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('civicrm_getexpos');
    }
}
