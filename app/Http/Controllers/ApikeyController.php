<?php

namespace App\Http\Controllers;

use App\Models\Apikey;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;



class ApikeyController extends Controller
{
    //
    public function make_key(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:apikeys,email',
            ]);

            $key = Str::random(32);
            $email = $request->input('email');

            Log::info('email', ['email' => $email]);
            Log::info('key', ['key' => $key]);


            Apikey::create([
                'email' => $email,
                'key' => $key
            ]);

            $recipient = $request->input('email');

            Mail::raw("Api key anda adalah {$key}. Gunakan key ini untuk menggunakan api", function ($message) use ($recipient) {
                $message->to($recipient)
                    ->subject('Api Key');
            });

            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
