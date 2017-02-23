<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkdvvtxbctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kkdvvtxbct', function (Blueprint $table) {
            $table->increments('id');
            $table->string('madichvu')->nullable();
            $table->string('masokk')->nullable();
            $table->string('tendichvu')->nullable();
            $table->string('diemdau')->nullable();
            $table->string('diemcuoi')->nullable();
            $table->string('qccl')->nullable();
            $table->string('dvtluot')->nullable();
            $table->string('dvtthang')->nullable();
            $table->double('giakkluot')->nullable();
            $table->double('giakklkluot')->nullable();
            $table->double('giakkthang')->nullable();
            $table->double('giakklkthang')->nullable();
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
        Schema::drop('kkdvvtxbct');
    }
}
