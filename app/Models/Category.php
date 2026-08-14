<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'show_on_homepage',
    ];

    protected $casts = [
        'show_on_homepage' => 'boolean',
    ];

    public function getCategoryLists()
    {
        return $this->all();
    }

}
