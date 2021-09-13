<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinogyApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinogy_apis', function (Blueprint $table) {
            $table->id();
            $table->string('endurl');
            $table->string('accskey');
            $table->string('srckey');
            $table->string('pwdkey');
            $table->string('apikey');
            $table->boolean('price')->nullable();
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
        Schema::dropIfExists('pinogy_apis');
    }
}
