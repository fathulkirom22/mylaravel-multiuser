<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListUserController extends Controller
{
  public function index()
  {
      return view('admin.list-user');
  }
}
