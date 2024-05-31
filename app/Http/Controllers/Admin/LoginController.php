<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //
    public function loginPageShow()
    {
        if(!Auth::check()){
            return view('admin.auth.login');
        }
        return redirect()->route('admin.dashboard.index');

    }
    public function login(Request $request){
        try{
            $verifyGoogleRecaptcha = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('GOOGLE_RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteIp' => $request->ip()
            ]);
            $googleRecaptchaResponse = $verifyGoogleRecaptcha->json();
            if (isset($googleRecaptchaResponse['success']) && $googleRecaptchaResponse['success']) {
                $credentials = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);

                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->route('admin.dashboard.index');
                }

                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');
            }else{
                throw new \Exception(__('Giriş Yapılamadı.'));
            }
        } catch (\Exception $exception) {
            throw ValidationException::withMessages([$exception->getMessage()]);
        }

    }
}
