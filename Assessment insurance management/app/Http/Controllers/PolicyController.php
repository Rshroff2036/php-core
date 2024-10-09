<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index()
    {
        $policies = Policy::all();
        return view('policies.index', compact('policies'));
    }

    public function create()
    {
        return view('policies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'policy_name' => 'required',
            'description' => 'required',
            'premium' => 'required|numeric',
            'duration' => 'required|integer',
        ]);

        Policy::create($request->all());
        return redirect()->route('policies.index')->with('success', 'Policy created successfully.');
    }

    public function show($id)
    {
        $policy = Policy::findOrFail($id);
        return view('policies.show', compact('policy'));
    }

    public function edit($id)
    {
        $policy = Policy::findOrFail($id);
        return view('policies.edit', compact('policy'));
    }

    public function update(Request $request, $id)
    {
        $policy = Policy::findOrFail($id);
        $policy->update($request->all());
        return redirect()->route('policies.index')->with('success', 'Policy updated successfully.');
    }

    public function destroy($id)
    {
        $policy = Policy::findOrFail($id);
        $policy->delete();
        return redirect()->route('policies.index')->with('success', 'Policy deleted successfully.');
    }
}
