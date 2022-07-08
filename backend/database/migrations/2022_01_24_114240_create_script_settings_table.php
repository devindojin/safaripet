<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScriptSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('script_settings', function (Blueprint $table) {
            $table->id();
            $table->text('header_display');
            $table->text('body_display');
            $table->text('footer_display');
            $table->tinyInteger('header_display_status')->comment('1=enabled 2=disabled');
            $table->tinyInteger('body_display_status')->comment('1=enabled 2=disabled');
            $table->tinyInteger('footer_display_status')->comment('1=enabled 2=disabled');
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
        Schema::dropIfExists('script_settings');
    }
}
