<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    
    public function create()
    {
        
        return view('complaints.complaint');
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',

        ]);

        Complaint::create($validated);

        return redirect()->route('complaints.create')
            ->with('success', 'تم إرسال شكواك بنجاح! سنقوم بالرد في أقرب وقت.');
    }

    
    public function index()
    {
        
                $complaints = Complaint::orderBy('created_at')->get();

        return view('complaints.index', compact('complaints'));
    }
}
