<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'price', 'serviceId', 'name'
    ];

    // public function Package()
    // {
    //     return $this->hasMany('App\Models\Package');
    // }

    // public function MenuFood()
    // {
    //     return $this->hasMany('App\Models\MenuFood');
    // }

    // public function service() {
    //     return $this->belongsTo('App\Models\Service');
    // }
}
