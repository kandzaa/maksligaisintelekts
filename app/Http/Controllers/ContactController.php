<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendLv(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'created_at' => now()->format('Y-m-d H:i:s'),
            ];

            Mail::raw(
                "Jauna ziņa no kontaktu formas\n\n" .
                "Vārds: {$data['name']}\n" .
                "E-pasts: {$data['email']}\n" .
                "Temats: {$data['subject']}\n" .
                "Ziņa: {$data['message']}\n" .
                "Nosūtīts: {$data['created_at']}",
                function ($message) use ($data) {
                    $message->to('info@māksligaisintelekts.lv')
                            ->subject("Jauna ziņa: {$data['subject']}")
                            ->from($data['email'], $data['name']);
                }
            );

            return redirect()->back()->with('success', 'Ziņa veiksmīgi nosūtīta! Mēs ar jums sazināsimies tuvākajā laikā.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Atvainojiet, radās kļūda nosūtot ziņu. Lūdzu, mēģiniet vēlreiz.');
        }
    }

    public function sendEn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'created_at' => now()->format('Y-m-d H:i:s'),
            ];

            Mail::raw(
                "New message from contact form\n\n" .
                "Name: {$data['name']}\n" .
                "Email: {$data['email']}\n" .
                "Subject: {$data['subject']}\n" .
                "Message: {$data['message']}\n" .
                "Sent: {$data['created_at']}",
                function ($message) use ($data) {
                    $message->to('info@māksligaisintelekts.lv')
                            ->subject("New message: {$data['subject']}")
                            ->from($data['email'], $data['name']);
                }
            );

            return redirect()->back()->with('success', 'Message sent successfully! We will contact you soon.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }
}
