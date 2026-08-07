<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners_p';

<<<<<<< HEAD
=======
    protected $fillable = [
        'src',
        'display',
    ];
>>>>>>> 7f568cc (update dashboard admin)

    function getBannersDisplay(): \Illuminate\Database\Eloquent\Collection
    {
        return Banner::where('display', 1)->get();
    }
}
