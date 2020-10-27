<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
    ];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     * Get the products for the category.
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }
}
