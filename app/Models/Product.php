<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'description',
        'image',
        'category_id',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
