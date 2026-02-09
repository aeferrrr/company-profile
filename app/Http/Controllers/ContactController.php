<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validasi
        $data = $request->validate([
            'name'       => 'required|string',
            'email'      => 'required|email',
            'phone'      => 'nullable|string',
            'subject'    => 'required|string',
            'message'    => 'required|string',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:5120',
        ]);

        // 2. Susun Isi Pesan
        $emailContent = "Name: " . $data['name'] . "\n" .
                        "Email: " . $data['email'] . "\n" .
                        "Phone: " . ($data['phone'] ?? '-') . "\n\n" .
                        "Message:\n" . $data['message'];

        try {
            // 3. Kirim Email (Gunakan Mail::raw)
            Mail::raw($emailContent, function ($message) use ($data, $request) {
                
                // Kirim ke admin
                $message->to('infokpcmestate@gmail.com')
                        ->subject($data['subject']);
                
                // Set Reply-To ke email pengirim (User)
                // Jadi saat Anda klik reply, langsung ke email customer
                $message->replyTo($data['email'], $data['name']);

                // 4. Handle Attachment
                if ($request->hasFile('attachment')) {
                    $file = $request->file('attachment');
                    $message->attach(
                        $file->getRealPath(), 
                        [
                            'as' => $file->getClientOriginalName(),
                            'mime' => $file->getMimeType(),
                        ]
                    );
                }
            });

            return back()->with('success', 'Message sent successfully!');

        } catch (\Exception $e) {
            // Log error untuk pengecekan developer
            Log::error("Gagal kirim email: " . $e->getMessage());
            
            // Tampilkan error spesifik ke layar (HANYA UNTUK DEBUGGING)
            // Jika sudah fix, ganti baris bawah ini dengan: return back()->with('error', 'Failed...');
            dd("Error SMTP: " . $e->getMessage());
        }
    }
}