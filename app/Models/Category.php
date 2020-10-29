<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes =
    [
      'title',
      'slug',
      'description'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_id',
        'image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'category_id');
    }

    /**
     * Get the post that owns the comment.
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
    
}
