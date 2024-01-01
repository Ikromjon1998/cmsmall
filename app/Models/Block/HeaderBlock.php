<?php

namespace App\Models\Block;

use App\Models\Block;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeaderBlock extends Block
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content'
    ];
}
