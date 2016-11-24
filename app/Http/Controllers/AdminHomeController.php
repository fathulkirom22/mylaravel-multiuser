<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('admin');
  }



  public function index()
  {

    return view("admin-home");

  }

  /**
   * Get the guard to be used during authentication.
   *
   * @return \Illuminate\Contracts\Auth\StatefulGuard
   */
  protected function guard()
  {
      return Auth::guard('admin_user');
  }
}
