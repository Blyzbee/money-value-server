<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id(); // ID
            $table->string('code', 3)->unique(); // la devise (EUR, USD, BTC etc...)
            $table->string('name'); // nom de la devise (Euro, United States Dollar, Bitcoin etc...)
            $table->timestamps(); // colonnes "created_at" et "updated_at"
        });
    }

    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
