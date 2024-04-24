<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Kelamin;
use App\Enums\Agama;
use App\Enums\StatusKawin;

return new class extends Migration
{
    public function up()
    {
        Schema::create('data_peserta', function (Blueprint $table) {
            $table->string('id_peserta', 16)->primary();
            $table->string('nama_lengkap_peserta', 50);
            $table->text('alamat');
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin')->default(Kelamin::Male->value);
            $table->string('agama')->default(Agama::Islam->value);
            $table->string('status')->default(StatusKawin::Single->value);
            $table->string('pekerjaan', 30);
            $table->string('hobi', 30);
            $table->string('keahlian', 30);
            $table->string('bahasa', 30);
    });

}

    public function down()
    {
        Schema::dropIfExists('data_peserta');
    }
};
