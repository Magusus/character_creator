<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('race_id');
            $table->integer('profession_id');
            $table->integer('level')->default(1);
            $table->integer('experience_points')->default(0);
            
            $table->integer('health_points')->default(0);
            $table->integer('stamina_points')->default(0);
            $table->integer('mana_points')->default(0);
            
            $table->integer('strength')->default(0);
            $table->integer('agility')->default(0);
            $table->integer('resistance')->default(0);
            $table->integer('mindfullness')->default(0);
            $table->integer('intelligence')->default(0);
            $table->integer('wisdom')->default(0);
            $table->integer('intuition')->default(0);
            $table->integer('charisma')->default(0);
            
            $table->string('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('body_color')->nullable();
            
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
        Schema::dropIfExists('characters');
    }
}
