<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = "konten";
    protected $primaryKey = "id_konten";
    protected $fillable = [
        'id_konten', 'gmbr', 'title', 'description'
    ];

    public function donasi()
    {
        return $this->hasMany(Donasi::class);
    }

}
