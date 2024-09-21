<?php

namespace App\Http\Controllers\Web\Frontend;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Returns the contact view with this data.
     *
     * @return View
     */
    public function index()
    {

        return view('frontend.layout.contact');
    }

    public function send(Request $request)
    {
        // dd($request->all());
        // dd(var_dump($request->phone));
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        $mail = Mail::to('admin@gmail.com')->send(new ContactFormMail($data));


        if ($mail) {
            return redirect()->back()->with('t-success', 'Your message has been sent successfully!');
        } else {
            return redirect()->back()->with('t-success', 'Message Send failed to update');
        }
    }
}
