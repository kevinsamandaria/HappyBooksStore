<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = "categories";

    public function books()
    {
        return $this->hasMany(books::class);
    }
}
