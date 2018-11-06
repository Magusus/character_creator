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
        $race = $this->races->find($request->race);
        $profession = $this->professions->find($request->profession);
        $level = $request->level -1;
        
        $exp = $race->experience_points + $profession->experience_points;
        $arr['exp'] = round($level * 1.75 * $exp + $exp);
        
        $arr['strength'] = $race->strength + $profession->strength;
        $arr['agility'] = $race->agility + $profession->agility;
        $arr['resistance'] = $race->resistance + $profession->resistance;
        $arr['mindfullness'] = $race->mindfullness + $profession->mindfullness;
        
        $arr['intelligence'] = $race->intelligence + $profession->intelligence;
        $arr['wisdom'] = $race->wisdom + $profession->wisdom;
        $arr['intuition'] = $race->intuition + $profession->intuition;
        $arr['charisma'] = $race->charisma + $profession->charisma;
        
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
            'race' => ['required', 'string'],
            'profession' => ['required', 'string'],
            
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

        $race = $this->races->where('name', $request->race)->first();
        $profession = $this->professions->where('name', $request->profession)->first();
        
        $character = new Character;
        $character->name = $request->name;
        $character->race_id = $race->id;
        $character->profession_id = $profession->id;
        
        $character->level = $request->level;
        $character->experience_points = $request->experience_points;
        
        $character->health_points = $request->health_points;
        $character->stamina_points = $request->stamina_points;
        $character->mana_points = $request->mana_points;
        
        $character->strength = $request->strength + $race->strength + $profession->strength;
        $character->agility = $request->agility + $race->agility + $profession->agility;
        $character->resistance = $request->resistance + $race->resistance + $profession->resistance;
        $character->mindfullness = $request->mindfullness + $race->mindfullness + $profession->mindfullness;
        $character->intelligence = $request->intelligence + $race->intelligence + $profession->intelligence;
        $character->wisdom = $request->wisdom + $race->wisdom + $profession->wisdom;
        $character->intuition = $request->intuition + $race->intuition + $profession->intuition;
        $character->charisma = $request->charisma + $race->charisma + $profession->charisma;
        
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
