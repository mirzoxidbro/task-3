<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Application;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:manager');
    }

    public function create(Application $application)
    {
        return view('answers.create', compact('application'));
    }

    public function store(Request $request)
    {
        Answer::create([
            'application_id' => $request->application_id,
            'body' => $request->body
        ]);

        return redirect()->route('dashboard');
    }
}
