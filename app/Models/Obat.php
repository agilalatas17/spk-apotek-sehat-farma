<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NilaiAlternatif;

class Obat extends Model
{
    protected $fillable = [
        'nama_obat',
        'kandungan',
        'rasa_obat',
        'efek_samping',
        'harga_obat',
        'bentuk_obat',
        'stok_obat'
    ];

    public function nilai()
    {
        return $this->hasMany(NilaiAlternatif::class);
    }
}
