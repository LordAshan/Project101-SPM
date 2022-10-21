<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Crypt;
use PDF;

class UserController extends Controller
{
    public function store(Request $request){

        //dd($request->all());

        $user = new User;

        $this->validate($request,[
            'name'=>'required|max:100|min:5',
        ]);

        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->address=$request->address;
        //$user->password=$request->password;
        $user->password=Crypt::encrypt($request->input('name'));
        $user->save();

        $data = User::all();

        //return view('adminCusView')->with('users',$data);
        //dd($data);
        return redirect()->back();
        //return view('/');
    }


}
