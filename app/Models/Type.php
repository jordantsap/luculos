<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Type extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes =
    [
      'title',
      'slug',
      'description'
    ];

    protected $fillable = [
      'image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     * Get the categories for the type.
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
