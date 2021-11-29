<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    protected $table = 'details';

    public function books()
    {
        return $this->belongsTo(books::class);
    }
}
