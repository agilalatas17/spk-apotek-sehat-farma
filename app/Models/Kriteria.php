<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NilaiAlternatif;
use App\Models\Crip;

class Kriteria extends Model
{
    protected $fillable = ['nama', 'bobot', 'tipe'];

    public function nilai()
    {
        return $this->hasMany(NilaiAlternatif::class);
    }

    public function crips()
    {
        return $this->hasMany(Crip::class);
    }
}
