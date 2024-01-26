<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }
    public function sendContactForm(Request $request)
    {
        // Valider les données du formulaire

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' => 'required',
        ]);

        // Envoyer l'e-mail
        $contactData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'msg_subject' => $request->input('msg_subject'),
            'message' => $request->input('message'),
        ];

        Mail::to('info@gofreshpay.com')->send(new ContactMail($contactData));

        // Autres étapes ou redirection après l'envoi du message
        return response()->json('success');
        // return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
    public function about()
    {
        return view('about');
    }
}
