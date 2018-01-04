<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        Session::flash('status','Registered!! but verify your email to activate your acccount');
       $user= User::create([
            'lastname' => $data['lastname'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'usertype' => $data['usertype'],
            'verifyToken' => Str::random(40),
           
        ]);
        $thisUser= User::findOrFail($user->id);
        $this->sendEmail($thisUser);
        return $user;
    }


    public function sendEmail($thisUser)
    {
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));

    }
    public function verfyEmailFirst(){
        return view('email.verfyEmailFirst');

    }
    //bem esta funcao faz aparecer no ecra apos clicares no email
    public function sendEmailDone($email,$verifyToken){

        //email igual emailverificaçao e token de verificacao e igual ao do emaildeverificacao
        $user=User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
        if($user){
            //atualizar como email foi ativado o status deve ser 1 e verifyToken deve ser null para nao ser mais utilizado 
            user::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
            return redirect(route('login'));

        }else{
            return  'user not found';

        }

    }



}
