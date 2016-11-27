<?php

namespace App\Http\Controllers\AdminAuth;

use App\User;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Registered;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;


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

    // protected $redirectTo = '/admin_register';

    protected $table = "admin_users";

    // protected $user = "admin_user";
    //
    // protected $request = "admin_register";

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

    public function showRegistrationForm()
    {
        return view('admin-auth.register');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function postRegister(Request $request)
    {
      try{
        $this->validate($request, [
          'name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:admin_users',
          'password' => 'required|min:6|confirmed',
        ]);
        DB::table('admin_users')->insert([
            'name'  => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => bcrypt($request->input('password')),
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return Redirect::to('admin_register')->with('success', "Success, add new admin!!");
      }catch (Illuminate\Database\QueryException $e){
          $errorCode = $e->errorInfo[1];
          if($e->errorInfo[1] == null){
              return Redirect::to('admin_register')->with('error', "Email is exsis !!!");
          }
      }

    }
}
