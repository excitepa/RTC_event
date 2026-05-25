<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Validation\ValidationRule;

class EventRegister implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string = null): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    // public function validate(string $attribute, mixed $value, Closure $fail): void
    // {
    //     //
    //     $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
    //         'secret' => env('RECAPTCHA_SECRET_KEY'),
    //         'response' => $value,
    //         'remoteip' => \request()->ip()
    //     ]);
    //     // dd($g_response);

    //     // Log::info('Recaptcha Response:', $g_response->json());

    //     if (!$g_response->json(key: 'success')) {
    //         $fail("The {$attribute} is invalid.");
    //     }
    // }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $value,
            'remoteip' => request()->ip()
        ]);

        $data = $response->json();

        if (
            !$data['success'] ||
            ($data['score'] ?? 0) < 0.5 || 
            ($data['action'] ?? '') !== 'submit'
        ) {
            $fail("Captcha verification failed. Please try again.");
        }
    }
}
