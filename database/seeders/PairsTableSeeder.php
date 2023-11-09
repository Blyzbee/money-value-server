<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PairsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pairs')->insert([
            ['base_currency_id' => 1, 'target_currency_id' => 2, 'conversion_rate' => 1.1], // USD -> EUR
            ['base_currency_id' => 2, 'target_currency_id' => 1, 'conversion_rate' => 0.9091], // EUR -> USD
            ['base_currency_id' => 3, 'target_currency_id' => 1, 'conversion_rate' => 0.0001], // BTC -> USD
            ['base_currency_id' => 1, 'target_currency_id' => 3, 'conversion_rate' => 10000], // USD -> BTC
            ['base_currency_id' => 2, 'target_currency_id' => 3, 'conversion_rate' => 11000], // EUR -> BTC
            ['base_currency_id' => 3, 'target_currency_id' => 2, 'conversion_rate' => 0.0000909], // BTC -> EUR
        ]);
    }
}
