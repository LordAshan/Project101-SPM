<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexLogin(){
        return view('login');
    }

    public function indexAdminDashboard(){
        return view('adminDashboard');
    }

    
}
