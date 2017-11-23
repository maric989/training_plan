<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $fillable = [
        'user_id',
        'practice_id',
        'series',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function practice()
    {
        return $this->belongsTo(Practice::class);
    }
}
