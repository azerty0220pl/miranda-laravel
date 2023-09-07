<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('contact', ["post" => false]);
    }

    public function store(Request $request): View
    {
        Message::create([
            'full_name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message_subject' => $request->subject,
            'message' => $request->msg,
            'sent' => date('Y-m-d'),
            'archived' => false,
            'seen' => false
        ]);

        return view('contact', ["post" => true]);
    }
}