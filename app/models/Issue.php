<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;

class IssueController extends Controller
{
    // Show all issues
    public function index()
    {
        return view('issues.index', ['issues' => Issue::all()]);
    }

    // Store new issue
    public function store(Request $request)
    {
        $request->validate([
            'issue_text' => 'required|string',
        ]);

        Issue::create(['issue_text' => $request->issue_text]);

        return redirect()->back();
    }

    // Mark an issue as resolved
    public function update(Request $request, Issue $issue)
    {
        $issue->update(['resolved' => $request->has('resolved')]);
        return redirect()->back();
    }
}