<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkdvvtxkctdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kkdvvtxkctdf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('masokk')->nullable();
            $table->string('masothue')->nullable();
            $table->string('madichvu')->nullable();
            $table->string('loaixe')->nullable();
            $table->string('diemdau')->nullable();
            $table->string('diemcuoi')->nullable();
            $table->string('tendichvu')->nullable();
            $table->string('qccl')->nullable();
            $table->string('dvt')->nullable();
            $table->double('giakk')->nullable();
            $table->double('giakklk')->nullable();
            $table->double('giahl')->nullable();
            $table->string('ghichu')->nullable();
            $table->string('thuevat')->nullable();
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
        Schema::drop('kkdvvtxkctdf');
    }
}
