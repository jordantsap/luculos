<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model
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
      'box',
      'palette',
      'pieces_per_package',
      'category_id',
      'type_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    /**
     * Get the post that owns the comment.
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type', 'type_id');
    }
}
