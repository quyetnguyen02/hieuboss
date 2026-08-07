<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $casts = [
        'show_on_homepage' => 'boolean',
    ];

    public function getCategoryLists(): Collection
    {
        return $this->all();
    }

}
