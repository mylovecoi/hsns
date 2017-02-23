<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDndvltTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dndvlt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tendn')->nullable();
            $table->string('masothue')->nullable();
            $table->string('diachidn')->nullable();
            $table->string('teldn')->nullable();
            $table->string('faxdn')->nullable();
            $table->string('email')->nullable();
            $table->string('noidknopthue')->nullable();
            $table->string('chucdanhky')->nullable();
            $table->string('nguoiky')->nullable();
            $table->string('diadanh')->nullable();
            $table->string('trangthai')->nullable();
            $table->string('tailieu')->nullable();
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
        Schema::dropIfExists('dndvlt');
    }
}
