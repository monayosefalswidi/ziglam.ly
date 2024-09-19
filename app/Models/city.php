<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
    ];

    public function Zone()
    {
        return $this->hasMany('App\Models\Zone');
    }

}
