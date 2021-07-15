<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    protected $table = "sk";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'syarat', 'ketentuan'
    ];
}
