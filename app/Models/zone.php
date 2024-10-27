<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'city_id',
        'note',
        'link',
    ];



    public function city()
    {
        return $this->belongsTo('App\Models\city');
    }
    public function representative()
    {
        return $this->hasMany('App\Models\representative');
    }
  

}