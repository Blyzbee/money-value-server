<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    protected $fillable = ['base_currency_id', 'target_currency_id', 'conversion_rate'];

    public function baseCurrency()
    {
        return $this->belongsTo(Currency::class, 'base_currency_id');
    }

    public function targetCurrency()
    {
        return $this->belongsTo(Currency::class, 'target_currency_id');
    }

    public function conversions()
    {
        return $this->hasMany(Conversion::class, 'pair_id');
    }
}
