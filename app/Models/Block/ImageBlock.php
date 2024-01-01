<?php

namespace App\Models\Block;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ImageBlock extends Model
{
    use HasFactory;

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
