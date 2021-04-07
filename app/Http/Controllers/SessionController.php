<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function logout()
    {
        Session::forget('user');
        return redirect('/login');

    }
}
