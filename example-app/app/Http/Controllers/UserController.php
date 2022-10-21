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

    //Search
    public function search_cus() {
        $search_text = $_GET['searchcus'];
        $users = User::where('name', 'LIKE', '%'.$search_text.'%')
        ->orwhere('address', 'LIKE', '%'.$search_text.'%')
        ->get();

        return view('adminCusView', compact('users'));
    }


}
