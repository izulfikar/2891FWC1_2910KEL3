<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableMembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membeli', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pelanggan_id')->unsigned();
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('hasil_tani_id')->unsigned();
            $table->foreign('hasil_tani_id')->references('id')->on('hasil_tani')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah');
            $table->integer('total_harga');
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
        Schema::drop('membeli');
    }
}
