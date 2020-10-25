<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Get all of the pages that are assigned this image.
     */
    public function pages()
    {
        return $this->morphedByMany('App\Models\Page', 'imageable');
    }
}
