<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversion extends Model
{
    protected $fillable = ['pair_id', 'amount', 'result'];

    public function pair()
    {
        return $this->belongsTo(Pair::class, 'pair_id');
    }
}
