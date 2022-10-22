<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\admin;
use PDF;


class EmpController extends Controller
{
    
    public function store(Request $request){

        // dd($request->all());
       $admins=new admin; 

        $name = $request->name;
        $empNumber = $request->empNumber;
        $email = $request->email;
        $address = $request->address;
     

      $d =   DB::insert("INSERT INTO `admins`(`name`,`empNumber`,`email`,`address`) VALUES ('$name','$empNumber', '$email',  '$address')");
    
      $data=admin::all();

     return Redirect::to('adminEmployeeList')->with('data',$d);

      // return Redirect::to('userDashboard')->with('account',$data);

}


  public function downloadPdf()
  {
    $users = admin::all();

    // share data to view
    view()->share('users-pdf', $users);
    $pdf = PDF::loadView('users-pdf', ['users' => $users]);
    return $pdf->download('users.pdf');
  }
  public function emp_view(Request $request)
  {


    $d= DB::table('admins')->paginate(10); //Query Builder
    //Or you can use
    $d= admin::paginate(10); //Eloquent ORM
    
      return view("adminEmployeeList")->with('data',$d);

  
  }

}
