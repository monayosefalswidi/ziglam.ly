<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class representative extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone1',
        'phone2',
        'zone_id',
    ];



    public function zone()
    {
        return $this->belongsTo('App\Models\zone');
    }
  
}
