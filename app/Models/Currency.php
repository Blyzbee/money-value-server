<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = ['code', 'name'];

    public function pairs()
    {
        return $this->belongsToMany(Pair::class, 'pairs', 'base_currency_id', 'target_currency_id');
    }

    public function targetPairs()
    {
        return $this->belongsToMany(Pair::class, 'pairs', 'target_currency_id', 'base_currency_id');
    }
}
