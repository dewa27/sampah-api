<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_user');
            $table->integer('id_driver')->nullable();
            $table->integer('id_admin')->nullable();
            $table->float('berat_total')->nullable();
            $table->integer('harga_total')->nullable();
            $table->enum('status_ambil', ['belum_diverifikasi', 'sampai_gudang', 'sedang_diambil', 'selesai', 'sudah_diambil', 'sudah_diverifikasi']);
            $table->tinyInteger('is_sampah_edited');
            $table->date('tanggal_ambil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
