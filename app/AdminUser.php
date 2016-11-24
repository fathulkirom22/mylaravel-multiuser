<?php
namespace App;

use App\Notifications\UserAdminResetPasswordNotification;
use Illuminate\Notifications\Notifiable;

class AdminUser extends User
{

    protected $table = "admin_users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserAdminResetPasswordNotification($token));
    }

}
