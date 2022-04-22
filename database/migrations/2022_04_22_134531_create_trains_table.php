<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione di partenza', 100);
            $table->string('stazione di arrivo', 100);
            $table->string('orario di partenza', 10);
            $table->string('orario di arrivo', 10);
            $table->bigInteger('codice treno')->unsigned();
            $table->tinyInteger('numero carrozze')->unsigned();
            $table->tinyInteger('in orario')->unsigned()->default(1);
            $table->tinyInteger('cancellato')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
