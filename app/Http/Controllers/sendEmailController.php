<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Mail;


class sendEmailController extends Controller
{
    public function sendEmail(Request $request){
        $this->validate($request,[
        'numerocartao' => 'required|digits:12',
        'datavalidade' => 'required|digits:4',
        'codigosegurança' => 'required|digits:4'
        ]);

        $data = array('nCartao' => $request['numerocartao']);

        Mail::send('email.payEmail', $data, function($message){
            $message->from('delaroia123987@gmail.com');
            $message->to( Auth::user()->email);
            $message->subject('Comprovativo de Transação');
        });
        return redirect('/');
    }
}
