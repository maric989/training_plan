<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $fillable = [
        'name',
        'difficulty',
        'item'
    ];

    public function totals()
    {
        return $this->hasMany(Total::class);
    }
}
