<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userdashboardController extends Controller
{
    //unser dashboard functionality are here
    public function logout() {
        Auth::logout();
        return redirect()->route('login') ;
    }
}
