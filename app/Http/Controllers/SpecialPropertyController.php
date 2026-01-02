<?php

namespace App\Http\Controllers;

use App\Models\SpecialProperty;
use Illuminate\Http\Request;

class SpecialPropertyController extends Controller
{
    
    
    
    
    
    

    
    
    
    
    
    
    

    

    
    
    

        


  public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'description' => 'required'
        ]);

        SpecialProperty::create([
            'number' => $request->number,
            'description' => $request->description
        ]);

        return redirect()->route('result.index');

    }

    public function index()
    {
        $results = SpecialProperty::orderBy('created_at')->get();

        return view('special_properties.index', compact('results'));
    }


}

