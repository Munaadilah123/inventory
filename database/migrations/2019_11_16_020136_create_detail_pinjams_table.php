<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pinjams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_inventaris');
            $table->unsignedBigInteger('id_peminjaman');
            $table->enum('status',['pinjam','kembali']);
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('id_inventaris')->references('id')->on('inventaris');
            $table->foreign('id_peminjaman')->references('id')->on('peminjamen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pinjams');
    }
}
