<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuransi', function (Blueprint $table) {
            $table->id('id_asuransi');
            $table->string('id_peserta', 16);
            $table->foreign('id_peserta')->references('id_peserta')->on('data_peserta')->onDelete('cascade');
            $table->string('nama_asuransi', 50); 
            $table->string('no_asuransi', 16);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asuransi');
    }
};
