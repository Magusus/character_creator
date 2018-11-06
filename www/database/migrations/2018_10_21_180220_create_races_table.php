<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('experience_points')->default(0);
            
            $table->integer('strength')->default(0);
            $table->integer('agility')->default(0);
            $table->integer('resistance')->default(0);
            $table->integer('mindfullness')->default(0);
            $table->integer('intelligence')->default(0);
            $table->integer('wisdom')->default(0);
            $table->integer('intuition')->default(0);
            $table->integer('charisma')->default(0);
            
            $table->string('description')->nullable();
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
        Schema::dropIfExists('races');
    }
}
