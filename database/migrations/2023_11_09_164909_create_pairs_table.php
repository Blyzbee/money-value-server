<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePairsTable extends Migration
{
    public function up()
    {
        Schema::create('pairs', function (Blueprint $table) {
            $table->id(); // ID
            $table->unsignedBigInteger('base_currency_id'); // lié à la table "currencies" pour la devise de base
            $table->unsignedBigInteger('target_currency_id'); // lié à la table "currencies" pour la devise cible
            $table->decimal('conversion_rate', 10, 5); // Taux de conversion entre les devises
            $table->timestamps(); // Colonnes "created_at" et "updated_at" pour la gestion des dates de création et de mise à jour
        });
    }

    public function down()
    {
        Schema::dropIfExists('pairs');
    }
}
