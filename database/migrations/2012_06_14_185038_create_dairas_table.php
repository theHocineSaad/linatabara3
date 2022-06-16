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
        Schema::create('dairas', function (Blueprint $table) {
            $table->id();
            $table->tinyText('name');
            $table->tinyText('arName');

            $table->tinyInteger('wilaya_id');
            $table->foreign('wilaya_id')->references('id')->on('wilayas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dairas');
    }
};
