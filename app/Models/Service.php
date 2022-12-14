<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'detail', 'icon'
    ];

    public function Package()
    {
        return $this->hasMany('App\Models\Package');
    }

    public function Menu()
    {
        return $this->hasMany('App\Models\Menu');
    }

    public function order() {
        return $this->hasMany('App\Models\Order');
    }
}
