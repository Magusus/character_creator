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
        
        //Humans
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
            'name' => 'Dávný',
            'experience_points' => 30,
            
            'strength' => 8,
            'agility' => 12,
            'resistance' => 8,
            'mindfullness' => 11,
            'intelligence' => 12,
            'wisdom' => 12,
            'intuition' => 12,
            'charisma' => 12,
        ]);
        Race::create([
            'name' => 'Horal',
            'experience_points' => 0,
            
            'strength' => 11,
            'agility' => 10,
            'resistance' => 12,
            'mindfullness' => 11,
            'intelligence' => 9,
            'wisdom' => 10,
            'intuition' => 11,
            'charisma' => 9,
        ]);
        Race::create([
            'name' => 'Barbar',
            'experience_points' => 0,
            
            'strength' => 13,
            'agility' => 8,
            'resistance' => 12,
            'mindfullness' => 10,
            'intelligence' => 8,
            'wisdom' => 7,
            'intuition' => 10,
            'charisma' => 8,
        ]);
        
        //Elfs
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
            'name' => 'Sluneční elf',
            'experience_points' => 0,
            
            'strength' => 8,
            'agility' => 11,
            'resistance' => 9,
            'mindfullness' => 12,
            'intelligence' => 12,
            'wisdom' => 13,
            'intuition' => 11,
            'charisma' => 12,
        ]);
        Race::create([
            'name' => 'Temný elf',
            'experience_points' => 0,
            
            'strength' => 7,
            'agility' => 13,
            'resistance' => 7,
            'mindfullness' => 14,
            'intelligence' => 12,
            'wisdom' => 11,
            'intuition' => 8,
            'charisma' => 12,
        ]);
        Race::create([
            'name' => 'Měsíční elf',
            'experience_points' => 0,
            
            'strength' => 6,
            'agility' => 12,
            'resistance' => 8,
            'mindfullness' => 12,
            'intelligence' => 14,
            'wisdom' => 14,
            'intuition' => 13,
            'charisma' => 13,
        ]);
        Race::create([
            'name' => 'Vznešený elf',
            'experience_points' => 0,
            
            'strength' => 7,
            'agility' => 12,
            'resistance' => 10,
            'mindfullness' => 12,
            'intelligence' => 14,
            'wisdom' => 14,
            'intuition' => 12,
            'charisma' => 13,
        ]);
        Race::create([
            'name' => 'Šedý elf',
            'experience_points' => 0,
            
            'strength' => 8,
            'agility' => 13,
            'resistance' => 7,
            'mindfullness' => 13,
            'intelligence' => 10,
            'wisdom' => 12,
            'intuition' => 8,
            'charisma' => 10,
        ]);
        
        //Dwarfs
        Race::create([
            'name' => 'Horský trpaslík',
            'experience_points' => 0,
            
            'strength' => 12,
            'agility' => 11,
            'resistance' => 12,
            'mindfullness' => 10,
            'intelligence' => 10,
            'wisdom' => 9,
            'intuition' => 8,
            'charisma' => 9,
        ]);
        Race::create([
            'name' => 'Čepelový trpaslík',
            'experience_points' => 0,
            
            'strength' => 13,
            'agility' => 9,
            'resistance' => 13,
            'mindfullness' => 9,
            'intelligence' => 10,
            'wisdom' => 8,
            'intuition' => 8,
            'charisma' => 8,
        ]);
        Race::create([
            'name' => 'Hlubinný trpaslík',
            'experience_points' => 0,
            
            'strength' => 9,
            'agility' => 12,
            'resistance' => 10,
            'mindfullness' => 11,
            'intelligence' => 12,
            'wisdom' => 9,
            'intuition' => 8,
            'charisma' => 9,
        ]);
        Race::create([
            'name' => 'Šedý trpaslík',
            'experience_points' => -30,
            
            'strength' => 10,
            'agility' => 10,
            'resistance' => 10,
            'mindfullness' => 12,
            'intelligence' => 10,
            'wisdom' => 10,
            'intuition' => 9,
            'charisma' => 8,
        ]);
        
        //Goblins
        Race::create([
            'name' => 'Severský skřet',
            'experience_points' => -30,
            
            'strength' => 9,
            'agility' => 12,
            'resistance' => 9,
            'mindfullness' => 13,
            'intelligence' => 9,
            'wisdom' => 9,
            'intuition' => 10,
            'charisma' => 7,
        ]);
        Race::create([
            'name' => 'Východní skřet',
            'experience_points' => -30,
            
            'strength' => 7,
            'agility' => 13,
            'resistance' => 9,
            'mindfullness' => 13,
            'intelligence' => 9,
            'wisdom' => 8,
            'intuition' => 8,
            'charisma' => 6,
        ]);
        Race::create([
            'name' => 'Chaot',
            'experience_points' => 30,
            
            'strength' => 11,
            'agility' => 11,
            'resistance' => 12,
            'mindfullness' => 11,
            'intelligence' => 10,
            'wisdom' => 8,
            'intuition' => 8,
            'charisma' => 6,
        ]);
        
        //Orks
        Race::create([
            'name' => 'Východní ork',
            'experience_points' => -30,
            
            'strength' => 13,
            'agility' => 8,
            'resistance' => 13,
            'mindfullness' => 9,
            'intelligence' => 8,
            'wisdom' => 7,
            'intuition' => 10,
            'charisma' => 8,
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
        Race::create([
            'name' => 'Marnooth',
            'experience_points' => -30,
            
            'strength' => 15,
            'agility' => 8,
            'resistance' => 15,
            'mindfullness' => 8,
            'intelligence' => 6,
            'wisdom' => 6,
            'intuition' => 11,
            'charisma' => 6,
        ]);
        
        //Tredoses
        Race::create([
            'name' => 'Zlatý tredos',
            'experience_points' => 50,
            
            'strength' => 9,
            'agility' => 12,
            'resistance' => 7,
            'mindfullness' => 13,
            'intelligence' => 15,
            'wisdom' => 15,
            'intuition' => 12,
            'charisma' => 13,
        ]);
        Race::create([
            'name' => 'Ohnivý tredos',
            'experience_points' => 50,
            
            'strength' => 12,
            'agility' => 12,
            'resistance' => 11,
            'mindfullness' => 12,
            'intelligence' => 11,
            'wisdom' => 11,
            'intuition' => 12,
            'charisma' => 12,
        ]);
        Race::create([
            'name' => 'Noční tredos',
            'experience_points' => 50,
            
            'strength' => 6,
            'agility' => 15,
            'resistance' => 7,
            'mindfullness' => 14,
            'intelligence' => 14,
            'wisdom' => 10,
            'intuition' => 8,
            'charisma' => 13,
        ]);
        Race::create([
            'name' => 'Padlý tredos',
            'experience_points' => 50,
            
            'strength' => 6,
            'agility' => 12,
            'resistance' => 10,
            'mindfullness' => 12,
            'intelligence' => 15,
            'wisdom' => 15,
            'intuition' => 12,
            'charisma' => 12,
        ]);
        Race::create([
            'name' => 'Šedý tredos',
            'experience_points' => 30,
            
            'strength' => 10,
            'agility' => 12,
            'resistance' => 10,
            'mindfullness' => 11,
            'intelligence' => 11,
            'wisdom' => 13,
            'intuition' => 8,
            'charisma' => 12,
        ]);
        
        //Spirits
        Race::create([
            'name' => 'Lesní skřítek',
            'experience_points' => 0,
            
            'strength' => 7,
            'agility' => 14,
            'resistance' => 7,
            'mindfullness' => 13,
            'intelligence' => 13,
            'wisdom' => 13,
            'intuition' => 12,
            'charisma' => 12,
        ]);
        Race::create([
            'name' => 'Horský skřítek',
            'experience_points' => 0,
            
            'strength' => 8,
            'agility' => 13,
            'resistance' => 10,
            'mindfullness' => 12,
            'intelligence' => 11,
            'wisdom' => 10,
            'intuition' => 8,
            'charisma' => 11,
        ]);
        
        //Others
        Race::create([
            'name' => "S\'zark",
            'experience_points' => 0,
            
            'strength' => 13,
            'agility' => 10,
            'resistance' => 13,
            'mindfullness' => 13,
            'intelligence' => 10,
            'wisdom' => 7,
            'intuition' => 11,
            'charisma' => 6,
        ]);
        Race::create([
            'name' => 'Glavran',
            'experience_points' => 0,
            
            'strength' => 6,
            'agility' => 15,
            'resistance' => 10,
            'mindfullness' => 14,
            'intelligence' => 9,
            'wisdom' => 8,
            'intuition' => 11,
            'charisma' => 7,
        ]);
    }
}
