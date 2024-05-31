<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contacts\StoreRequest;
use App\Models\BranchOffice;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;


class ContactController extends Controller
{
    public function index()
    {
        $locations = BranchOffice::query()
            ->get();
        return view('contacts', [
            'locations' => $locations
        ]);
    }

    public function store(StoreRequest $request)
    {
        try {
            $verifyGoogleRecaptcha = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('GOOGLE_RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteIp' => $request->ip()
            ]);
            $googleRecaptchaResponse = $verifyGoogleRecaptcha->json();
            if (isset($googleRecaptchaResponse['success']) && $googleRecaptchaResponse['success']) {
                $contact = Contact::create([
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'message' => $request->message
                ]);

                if (!$contact)
                    throw new \Exception(__('Mesaj kaydedilemedi.'));
            }else{
                throw new \Exception(__('Mesaj kaydedilemedi.'));
            }
        } catch (\Exception $exception) {
            throw ValidationException::withMessages([$exception->getMessage()]);
        }
    }
}
