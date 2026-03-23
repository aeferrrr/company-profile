<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // HONEYPOT
        if ($request->filled('website')) {
            return back();
        }

        // RATE LIMIT
        $key = 'contact-form-' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->with('error', 'Terlalu banyak percobaan, coba lagi nanti.');
        }

        RateLimiter::hit($key, 60);

        // VALIDASI
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:5120',
        ]);

        // VALIDASI CAPTCHA
        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret="
            . env('RECAPTCHA_SECRET') .
            "&response=" . $request->input('g-recaptcha-response')
        );

        $responseKeys = json_decode($response, true);

        if (!$responseKeys || !$responseKeys["success"]) {
            return back()->with('error', 'Verifikasi robot gagal ❌');
        }

        try {
            // KIRIM EMAIL
            Mail::send('emails.contact', ['data' => $data], function ($message) use ($data, $request) {

                $message->to('infokpcmestate@gmail.com')
                        ->subject('[KPCM] ' . $data['subject']);

                $message->replyTo($data['email'], $data['name']);

                // ATTACHMENT
                if ($request->hasFile('attachment')) {
                    $file = $request->file('attachment');

                    if ($file->isValid()) {
                        $message->attach(
                            $file->getRealPath(),
                            [
                                'as' => $file->getClientOriginalName(),
                                'mime' => $file->getMimeType(),
                            ]
                        );
                    }
                }
            });

            return back()->with('success', 'Pesan berhasil dikirim 🚀');

        } catch (\Exception $e) {

            Log::error("Gagal kirim email: " . $e->getMessage());

            return back()->with('error', 'Gagal mengirim pesan ❌');
        }
    }
}