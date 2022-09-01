<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexAboutUs(){
        return view('aboutUs');
    }

    public function indexAdminDashboard(){
        return view('adminDashboard');
    }
}
