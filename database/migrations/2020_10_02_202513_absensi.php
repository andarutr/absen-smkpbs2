<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Absensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama', 128);
            $table->string('kelas', 5);
            $table->string('jurusan', 50);
            $table->string('guru', 128);
            $table->string('nrp', 10);
            $table->string('mata_pelajaran', 50);
            $table->string('foto', 128);
            $table->string('waktu', 50);
            $table->tinyInteger('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
