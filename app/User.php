<?php

namespace App;

use theycinema\app\Payment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MailResetPasswordToken;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'usertype','lastname','verifyToken',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function subscriber(){
        #return $this->hasOne(Payment::class);
    }
    
    /**
 * Send a password reset email to the user
 */
public function sendPasswordResetNotification($token)
{
    $this->notify(new MailResetPasswordToken($token));
}
    
}
