<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    //
    public function contact_us(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        try {

            Contact::insert([
                'email' => $request->email,
                'subject' => $request->subject,
                'name' => $request->name,
                'message' => $request->message,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            Session::flash('success','Success your message was delivered.We will get in touch shortly');

            return redirect()->route('home');

        }catch (\Throwable $th){

            Session::flash('error','Oops! Sorry that happened.Maybe you can try again.');

            return redirect()->route('home');
        }


    }
}
