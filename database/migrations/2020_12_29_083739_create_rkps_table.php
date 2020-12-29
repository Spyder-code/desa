<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRkpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkps', function (Blueprint $table) {
            $table->id();
            $table->string('bidang');
            $table->string('kegiatan');
            $table->string('lokasi');
            $table->string('volume');
            $table->string('tahun');
            $table->string('jumlah');
            $table->string('sumber');
            $table->string('pola');
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
        Schema::dropIfExists('rkps');
    }
}
