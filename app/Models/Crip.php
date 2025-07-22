<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kriteria;

class Crip extends Model
{
    protected $fillable = ['kriteria_id', 'nama', 'nilai'];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
