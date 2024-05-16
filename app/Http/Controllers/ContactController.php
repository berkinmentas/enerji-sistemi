<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contacts\StoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class ContactController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function store(StoreRequest $request)
    {
        try {
            $contact = Contact::create([
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ]);
            if (!$contact) {
                throw new \Exception(__('Mesaj kaydedilemedi.'));
            }
        } catch (\Exception $exception) {
            throw ValidationException::withMessages([$exception->getMessage()]);
        }
    }
}
