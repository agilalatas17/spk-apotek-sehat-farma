<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiAlternatif extends Model
{
    use HasFactory;

    protected $fillable = [
        'obat_id',
        'kriteria_id',
        'nilai',
        'crip_id'
    ];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function crip()
    {
        return $this->belongsTo(Crip::class);
    }
}
