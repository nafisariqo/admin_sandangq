<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table = "donasi";
    protected $primaryKey = "id_donasi";
    protected $fillable = [
        'id_donasi', 'name', 'phone', 'address', 'id_konten', 'resi'
    ];

    public function konten()
    {
        return $this->belongsTo(Konten::class);
    }
   
}
