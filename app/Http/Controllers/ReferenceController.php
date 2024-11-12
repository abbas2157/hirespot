<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::all();
        return view('references.index', compact('references'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:references',
            'phone' => 'required|string',
        ]);
    
        $reference = Reference::create($request->all() + ['user_id' => auth()->id()]);
        return redirect()->back()->with('success', 'Reference added successfully');
    }

    public function edit($id)
    {
        $reference = Reference::findOrFail($id);
        return view('references.edit', compact('reference'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:references,email,'.$id,
            'phone' => 'required|string',
        ]);

        $reference = Reference::findOrFail($id);
        $reference->update($request->all());
        return redirect()->back()->with('success', 'Reference updated successfully');
    }

    public function destroy($id)
    {
        $reference = Reference::findOrFail($id);
        $reference->delete();
        return redirect()->back()->with('success', 'Reference deleted successfully');
    }
}
