<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCskddvltTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cskddvlt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('macskd')->nullable();
            $table->string('masothue')->nullable();
            $table->string('tencskd')->nullable();
            $table->string('loaihang')->nullable();
            $table->string('diachikd')->nullable();
            $table->string('telkd')->nullable();
            $table->string('toado')->nullable();
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
        Schema::dropIfExists('cskddvlt');
    }
}
