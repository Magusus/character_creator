<?php

namespace App\Http\Controllers;

use App\Profession;

use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    private $professions;
    
    public function __construct() {
        $this->professions = Profession::all();
    }
    
    public function index(Request $request) {
        $professions = $this->professions;

        return view('professions', compact('professions'));
    }
    
    public function create(Request $request) {
        return view('professions.new');
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
        
        $profession = new Profession;
        $profession->name = $request->name;
        
        $profession->strength = $request->strength;
        $profession->agility = $request->agility;
        $profession->resistance = $request->resistance;
        $profession->mindfullness = $request->mindfullness;
        $profession->intelligence = $request->intelligence;
        $profession->wisdom = $request->wisdom;
        $profession->intuition = $request->intuition;
        $profession->charisma = $request->charisma;

        $profession->description = $request->description;
        $profession->save();
        
        return redirect('/professions');
    }
    
    public function show(Request $request) {
        $profession = $this->professions->find($request->id);

        return view('professions.show', compact('profession'));
    }
    
    public function edit(Request $request) {
        $profession = $this->professions->find($request->id);

        return view('professions.edit', compact('profession'));
    }
    
    public function editSave(Request $request, Profession $update) {
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

        return redirect('professions/'.$request->id.'/edit');
    }
    
    public function delete(Request $request) {
        $this->professions->find($request->id)->delete();
        return redirect('/professions');
    }
}
