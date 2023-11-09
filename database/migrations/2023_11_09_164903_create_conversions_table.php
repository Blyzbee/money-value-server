<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversionsTable extends Migration
{
    public function up()
    {
        Schema::create('conversions', function (Blueprint $table) {
            $table->id(); // ID
            $table->unsignedBigInteger('pair_id'); // lié à la table "pairs"
            $table->decimal('amount', 10, 2); // montant de la conversion
            $table->decimal('result', 10, 2); // résultat de la conversion
            $table->timestamps(); // colonnes "created_at" et "updated_at"
        });
    }

    public function down()
    {
        Schema::dropIfExists('conversions');
    }
}
