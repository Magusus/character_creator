<?php

use App\Character;
use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->delete();
        if (env('APP_ENV') != "development")
            return;
        
        Character::create([
            'name' => 'Rema Verdia',
            'race_id' => 1,
            'profession_id' => 1,
            'level' => 15,
            'experience_points' => 0,
            
            'health_points' => 500,
            'stamina_points' => 200,
            'mana_points' => 200,
        ]);
        
        Character::create([
            'name' => 'Remis Silvertongue',
            'race_id' => 2,
            'profession_id' => 2,
            'level' => 15,
            'experience_points' => 0,
        ]);
        
        Character::create([
            'name' => 'Thalya Veri',
            'race_id' => 3,
            'profession_id' => 3,
            'level' => 15,
            'experience_points' => 0,
        ]);
    }
}
