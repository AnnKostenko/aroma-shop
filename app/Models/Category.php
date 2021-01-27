<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id','name','description','publish'];
    
    protected $table = 'categories';

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
    
}