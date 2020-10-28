<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function __invoke()
  {
      return view('contact');
  }
  public function postpricelist(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'min:10']);
    $data = array(
      'name' => $request->name,
      'email' => $request->email,
      'subject' => 'New Contact form',
      'bodyMessage' => $request->message
      );
    Mail::send('emails.contact', $data, function($message) use ($data){
      $message->from($data['email']);
      $message->to('jordantsap@hotmail.gr');
      $message->subject($data['subject']);
    });
    Session::flash('success', 'Ευχαριστούμε, το μύνημα σας εστάλη!');
    return redirect(route('contact'));
  }
}
