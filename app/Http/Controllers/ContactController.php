<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index()
    {
        $user = User::first();
        $settings = Settings::first();

        return view('contact', [
            'user'=> $user,
            'settings'=> $settings,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'date' => 'required',
        ]);
        $date = Carbon::createFromFormat('d/m/Y', $request->get('date'));

        $contact = new Contact;
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->message = $request->get('message');
        $contact->date = $date->toDateString();

        $contact->save();
        // Redirect the user back to the form with a success message
        return back()->with('success', 'Your message has been sent!');
    }
}
