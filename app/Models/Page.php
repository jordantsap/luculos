<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
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
    ];

    /**
     * Get all of the images for the page.
     */
    public function images()
    {
        return $this->morphToMany('App\Models\Image', 'imageable');
    }
}
