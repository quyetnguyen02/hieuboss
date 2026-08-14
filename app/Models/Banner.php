<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'src',
        'display',
    ];

    function getBannersDisplay(): \Illuminate\Database\Eloquent\Collection
    {
        return Banner::where('display', 1)->get();
    }
}
