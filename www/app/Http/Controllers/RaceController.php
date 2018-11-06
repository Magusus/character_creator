<?php

namespace App\Http\Controllers;

use App\Race;

use Illuminate\Http\Request;

class RaceController extends Controller
{
    private $races;
    
    public function __construct() {
        $this->races = Race::all();
    }
    
    public function index(Request $request) {
        $races = $this->races;

        return view('races', compact('races'));
    }
    
    public function create(Request $request) {
        return view('races.new');
    }
    
    public function createSave(Request $request) {
        $request->validate([
            'name' => ['required', 'string'],

            'strength' => ['required', 'numeric'],
            'agility' => ['required', 'numeric'],
            'resistance' => ['required', 'numeric'],
            'mindfullness' => ['required', 'numeric'],
            'intelligence' => ['required', 'numeric'],
            'wisdom' => ['required', 'numeric'],
            'intuition' => ['required', 'numeric'],
            'charisma' => ['required', 'numeric'],

            'description' => ['nullable']
        ]);
        
        $race = new Race;
        $race->name = $request->name;
        
        $race->strength = $request->strength;
        $race->agility = $request->agility;
        $race->resistance = $request->resistance;
        $race->mindfullness = $request->mindfullness;
        $race->intelligence = $request->intelligence;
        $race->wisdom = $request->wisdom;
        $race->intuition = $request->intuition;
        $race->charisma = $request->charisma;

        $race->description = $request->description;
        $race->save();
        
        return redirect('/races');
    }
    
    public function show(Request $request) {
        $race = $this->races->find($request->id);

        return view('races.show', compact('race'));
    }
    
    public function edit(Request $request) {
        $race = $this->races->find($request->id);

        return view('races.edit', compact('race'));
    }
    
    public function editSave(Request $request, Race $update) {
        $request->validate([
            'strength' => ['required', 'numeric'],
            'agility' => ['required', 'numeric'],
            'resistance' => ['required', 'numeric'],
            'mindfullness' => ['required', 'numeric'],
            'intelligence' => ['required', 'numeric'],
            'wisdom' => ['required', 'numeric'],
            'intuition' => ['required', 'numeric'],
            'charisma' => ['required', 'numeric'],

            'description' => ['nullable']
        ]);
        
        $update->where('id', $request->id)->update([
            'strength' => $request->strength,
            'agility' => $request->agility,
            'resistance' => $request->resistance,
            'mindfullness' => $request->mindfullness,
            'intelligence' => $request->intelligence,
            'wisdom' => $request->wisdom,
            'intuition' => $request->intuition,
            'charisma' => $request->charisma,
            
            'description' => $request->description
        ]);

        return redirect('races/'.$request->id.'/edit');
    }
    
    public function delete(Request $request) {
        $this->races->find($request->id)->delete();
        return redirect('/races');
    }
}
