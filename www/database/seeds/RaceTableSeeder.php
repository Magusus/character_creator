<?php

use App\Race;
use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->delete();
        Race::create([
            'name' => 'Člověk',
            'experience_points' => 0,
            
            'strength' => 9,
            'agility' => 10,
            'resistance' => 10,
            'mindfullness' => 11,
            'intelligence' => 11,
            'wisdom' => 10,
            'intuition' => 10,
            'charisma' => 10,
        ]);
        
        Race::create([
            'name' => 'Lesní elf',
            'experience_points' => 0,
            
            'strength' => 7,
            'agility' => 13,
            'resistance' => 8,
            'mindfullness' => 13,
            'intelligence' => 11,
            'wisdom' => 12,
            'intuition' => 10,
            'charisma' => 11,
        ]);
        
        Race::create([
            'name' => 'Vrethog',
            'experience_points' => 0,
            
            'strength' => 12,
            'agility' => 10,
            'resistance' => 11,
            'mindfullness' => 10,
            'intelligence' => 10,
            'wisdom' => 8,
            'intuition' => 11,
            'charisma' => 8,
        ]);
    }
}
