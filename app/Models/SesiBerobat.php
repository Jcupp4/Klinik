<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiBerobat extends Model
{
    use HasFactory;

    protected $table = 'sesi_berobat'; // sesuai nama tabel di migration

    protected $fillable = ['pasien_id', 'tanggal', 'keluhan'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class); // tidak perlu ubah, sudah benar
    }
}
