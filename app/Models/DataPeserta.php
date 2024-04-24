<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Agama;
use App\Enums\Kelamin;
use App\Enums\StatusKawin;

class DataPeserta extends Model
{
    use HasFactory;

    protected $casts = [
        'jenis_kelamin' => Kelamin::class,
        'agama' => Agama::class,
        'status' => StatusKawin::class,
    ];

    protected $fillable = ['id_peserta', 'nama_lengkap_peserta', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
    'agama', 'status', 'pekerjaan', 'hobi', 'keahlian', 'bahasa'];

    protected $table = 'data_peserta';

    public $timestamps = false;

    public function asuransi()
    {
        return $this->hasOne(Asuransi::class, 'id_peserta', 'id_peserta');
    }
}
