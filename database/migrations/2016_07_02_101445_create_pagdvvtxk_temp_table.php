<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagdvvtxkTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagdvvtxk_temp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('masothue')->nullable();
            $table->string('masokk')->nullable();
            $table->string('madichvu')->nullable();
            $table->double('sanluong')->default(0);
            $table->double('cpnguyenlieutt')->default(0);
            $table->double('cpcongnhantt')->default(0);
            $table->double('cpkhauhaott')->default(0);
            $table->double('cpsanxuatdt')->default(0);
            $table->double('cpsanxuatc')->default(0);
            $table->double('cptaichinh')->default(0);
            $table->double('cpbanhang')->default(0);
            $table->double('cpquanly')->default(0);
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
        Schema::drop('pagdvvtxk_temp');
    }
}
