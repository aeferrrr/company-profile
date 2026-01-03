<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($data) {
            $message->to('infokpcmestate@gmail.com')
                    ->subject('New Contact Us Message')
                    ->setBody(new TextPart(
                        "Name: {$data['name']}\n".
                        "Email: {$data['email']}\n".
                        "Phone: {$data['phone']}\n".
                        "Message: {$data['message']}",
                        'utf-8'
                    ));
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
