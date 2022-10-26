<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\ApplicationCreated;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        if($request->hasFile('file_url'))
        {
            $fileName = $request->file('file_url')->getClientOriginalName();
            $path = $request->file('file_url')->storeAs('files', $fileName, 'public');
        }

        $request->validate([
            'subject' => 'required|max:255',
            'message' => 'required',
            'file_url' => 'file|mimes:png,jpg,pdf'
        ]);


        $application = Application::create([
            'user_id' => $request->user_id,
            'subject' => $request->subject,
            'message' => $request->message,
            'file_url' => $path ?? null
        ]);


        SendEmailJob::dispatch($application);

        return redirect()->back();


    }
}
