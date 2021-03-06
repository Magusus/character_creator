<?php

namespace App\Http\Controllers;

use App\Character;
use App\Race;
use App\Profession;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    private $characters;
    private $races;
    private $professions;
    
    public function __construct() {
        $this->characters = Character::all();
        $this->races = Race::all();
        $this->professions = Profession::all();
    }
    
    public function ajaxLoadStats(Request $request) {
        $level = $request->level -1;
        $exp = 0;
            
        $arr['strength'] = 0;
        $arr['agility'] = 0;
        $arr['resistance'] = 0;
        $arr['mindfullness'] = 0;

        $arr['intelligence'] = 0;
        $arr['wisdom'] = 0;
        $arr['intuition'] = 0;
        $arr['charisma'] = 0;
        
        if ($race = $this->races->find($request->race)) {
            $exp += $race->experience_points;
            
            $arr['strength'] += $race->strength;
            $arr['agility'] += $race->agility;
            $arr['resistance'] += $race->resistance;
            $arr['mindfullness'] += $race->mindfullness;

            $arr['intelligence'] += $race->intelligence;
            $arr['wisdom'] += $race->wisdom;
            $arr['intuition'] += $race->intuition;
            $arr['charisma'] += $race->charisma;
        }
        
        if ($profession = $this->professions->find($request->profession)) {
            $exp += $profession->experience_points;
            
            $arr['strength'] += $profession->strength;
            $arr['agility'] += $profession->agility;
            $arr['resistance'] += $profession->resistance;
            $arr['mindfullness'] += $profession->mindfullness;

            $arr['intelligence'] += $profession->intelligence;
            $arr['wisdom'] += $profession->wisdom;
            $arr['intuition'] += $profession->intuition;
            $arr['charisma'] += $profession->charisma;
        }
        
        $arr['exp'] = round(pow(1.75,$level) * $exp);
        
        return response()->json($arr);
    }
    
    public function index(Request $request) {
        $characters = $this->characters;
        
        foreach ($characters as $character) {
            if ($race = $this->races->find($character->race_id))
                $character->race = $race->name;
            else
                $character->race = null;
            
            if ($profession = $this->professions->find($character->profession_id))
                $character->profession = $profession->name;
            else
                $character->profession = null;
        }

        return view('home', compact('characters'));
    }
    
    public function create(Request $request) {
        $races = $this->races;
        $professions = $this->professions;
        
        return view('characters.new', compact('races', 'professions'));
    }
    
    public function createSave(Request $request) {     
        $request->validate([
            'name' => ['required', 'string'],
            'race' => ['required', 'numeric', 'exists:races,id'],
            'profession' => ['required', 'numeric', 'exists:professions,id'],
            
            'level' => ['required', 'numeric', 'min:1', 'max:100'],
            'experience_points' => ['required', 'string'],
            
            'health_points' => ['required', 'numeric'],
            'stamina_points' => ['required', 'numeric'],
            'mana_points' => ['required', 'numeric'],
            
            'strength' => ['required', 'numeric'],
            'agility' => ['required', 'numeric'],
            'resistance' => ['required', 'numeric'],
            'mindfullness' => ['required', 'numeric'],
            'intelligence' => ['required', 'numeric'],
            'wisdom' => ['required', 'numeric'],
            'intuition' => ['required', 'numeric'],
            'charisma' => ['required', 'numeric'],
            
            'age' => ['nullable', 'alpha_num'],
            'height' => ['nullable', 'alpha_num'],
            'weight' => ['nullable', ' alpha_num'],
            'eye_color' => ['nullable', 'alpha_num'],
            'hair_color' => ['nullable', 'alpha_num'],
            'body_color' => ['nullable', 'alpha_num'],
            
            'description' => ['nullable']
        ]);
        
        $character = new Character;
        $character->name = $request->name;
        $character->race_id = $request->race;
        $character->profession_id = $request->profession;
        
        $character->level = $request->level;
        $character->experience_points = $request->experience_points;
        
        $character->health_points = $request->health_points;
        $character->stamina_points = $request->stamina_points;
        $character->mana_points = $request->mana_points;
        
        $character->strength = $request->strength;
        $character->agility = $request->agility;
        $character->resistance = $request->resistance;
        $character->mindfullness = $request->mindfullness;
        $character->intelligence = $request->intelligence;
        $character->wisdom = $request->wisdom;
        $character->intuition = $request->intuition;
        $character->charisma = $request->charisma;
        
        $character->age = $request->age;
        $character->height = $request->height;
        $character->weight = $request->weight;
        $character->eye_color = $request->eye_color;
        $character->hair_color = $request->hair_color;
        $character->body_color = $request->body_color;
        
        $character->description = $request->description;
        $character->save();
        
        return redirect('/');
    }
    
    public function show(Request $request) {
        $character = $this->characters->find($request->id);
        
        if ($race = $this->races->find($character->race_id))
            $character->race = $race->name;
        else
            $character->race = null;

        if ($profession = $this->professions->find($character->profession_id))
            $character->profession = $profession->name;
        else
            $character->profession = null;

        return view('characters.show', compact('character'));
    }
    
    public function edit(Request $request) {
        $character = $this->characters->find($request->id);
        $races = $this->races;
        $professions = $this->professions;
        
        if ($race = $this->races->find($character->race_id))
            $character->race = $race->name;
        else
            $character->race = null;

        if ($profession = $this->professions->find($character->profession_id))
            $character->profession = $profession->name;
        else
            $character->profession = null;

        return view('characters.edit', compact('character', 'races', 'professions'));
    }
    
    public function editSave(Request $request, Character $update) {
        $request->validate([
            'name' => ['required', 'string'],
            'race' => ['required', 'string'],
            'profession' => ['required', 'string'],
            
            'level' => ['required', 'numeric'],
            'experience_points' => ['required', 'string'],
            
            'health_points' => ['required', 'numeric'],
            'stamina_points' => ['required', 'numeric'],
            'mana_points' => ['required', 'numeric'],
            
            'strength' => ['required', 'numeric'],
            'agility' => ['required', 'numeric'],
            'resistance' => ['required', 'numeric'],
            'mindfullness' => ['required', 'numeric'],
            'intelligence' => ['required', 'numeric'],
            'wisdom' => ['required', 'numeric'],
            'intuition' => ['required', 'numeric'],
            'charisma' => ['required', 'numeric'],
            
            'age' => ['nullable', 'alpha_num'],
            'height' => ['nullable', 'alpha_num'],
            'weight' => ['nullable', ' alpha_num'],
            'eye_color' => ['nullable', 'alpha_num'],
            'hair_color' => ['nullable', 'alpha_num'],
            'body_color' => ['nullable', 'alpha_num'],
            
            'description' => ['nullable']
        ]);
        
        $race = $this->races->where('name', $request->race)->first()->id;
        $profession = $this->professions->where('name', $request->profession)->first()->id;
        
        $update->where('id', $request->id)->update([
            'name' => $request->name,
            'race_id' => $race,
            'profession_id' => $profession,
            
            'level' => $request->level,
            'experience_points' => $request->experience_points,
            
            'health_points' => $request->health_points,
            'stamina_points' => $request->stamina_points,
            'mana_points' => $request->mana_points,
            
            'strength' => $request->strength,
            'agility' => $request->agility,
            'resistance' => $request->resistance,
            'mindfullness' => $request->mindfullness,
            'intelligence' => $request->intelligence,
            'wisdom' => $request->wisdom,
            'intuition' => $request->intuition,
            'charisma' => $request->charisma,
            
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'eye_color' => $request->eye_color,
            'hair_color' => $request->hair_color,
            'body_color' => $request->body_color,
            
            'description' => $request->description
        ]);

        return redirect('characters/'.$request->id.'/edit');
    }
    
    public function delete(Request $request) {
        $this->characters->find($request->id)->delete();
        return redirect('/');
    }
}
