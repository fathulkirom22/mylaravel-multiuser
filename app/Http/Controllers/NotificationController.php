<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotificationController extends Controller
{
    public function notification(){
      session()->set('success','Item created successfully.');

      return view('layouts.notification');
    }
}
