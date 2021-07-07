<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table = "volunteer";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'gambar', 'nama'
    ];
}
