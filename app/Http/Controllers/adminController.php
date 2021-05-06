<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
class adminController extends Controller
{
    public function adminPanel() {
        if(session()->has('login')) {
            return view('admin');
        }
        else {
            return route('login');
        }
    }
}