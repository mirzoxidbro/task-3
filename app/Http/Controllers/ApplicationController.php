<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        if($request->hasFile('file'))
        {
            $fileName = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('files', $fileName, 'public');
        }

        $request->validate([
            'subject' => 'required|max:255',
            'message' => 'required',
            'file' => 'file|mimes:png,jpg,pdf'
        ]);


        Application::create([
            'user_id' => $request->user_id,
            'subject' => $request->subject,
            'message' => $request->message,
            'file_url' => $path ?? null
        ]);

        return redirect()->back();


    }
}
