<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Policy;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    public function index()
    {
        $claims = Claim::all();
        return view('claims.index', compact('claims'));
    }

    public function create()
    {
        $policies = Policy::all();
        return view('claims.create', compact('policies'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'policy_id' => 'required',
            'claim_reason' => 'required',
        ]);

        Claim::create([
            'user' => $request->user,
            'policy_id' => $request->policy_id,
            'claim_reason' => $request->claim_reason,
        ]);

        return redirect()->route('claims.index')->with('success', 'Claim submitted successfully.');
    }

    public function updateStatus($id, $status)
    {
        $claim = Claim::findOrFail($id);
        $claim->claim_status = $status;
        $claim->save();
        return redirect()->back()->with('success', 'Claim status updated.');
    }
}
