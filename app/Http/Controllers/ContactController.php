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
        'name'       => 'required|string',
        'email'      => 'required|email',
        'phone'      => 'nullable|string',
        'subject'    => 'required|string',
        'message'    => 'required|string',
        'attachment' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:5120',
    ]);

    Mail::send([], [], function ($message) use ($data, $request) {

        $message->to('infokpcmestate@gmail.com')
            ->subject($data['subject']) 
            ->text(
                "Name: {$data['name']}\n".
                "Email: {$data['email']}\n".
                "Phone: {$data['phone']}\n\n".
                "Message:\n{$data['message']}"
            );

        // ✅ ATTACHMENT (INI YANG BENER)
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');

            $message->attach(
                $file->getPathname(), // ⬅️ PENTING
                [
                    'as'   => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]
            );
        }
    });

    return back()->with('success', 'Message sent successfully!');
}
}