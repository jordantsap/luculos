<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'type_id',
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

    /**
     * Scope a query to only include premium categories.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePremium($query)
    {
        return $query->where('type_id', 2);
    }
}
