<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\admin;
use PDF;

class AdminController extends Controller
{
  
  public function search_emp(Request $request){

    $id=$request->id;
 
    $name = $request->name;

   
    $d=admin::when($request->has("name"),function($q)use($request){
      return $q->where("name","like","%".$request->get("name")."%");
    })->paginate(5);


   return view("employeeEmployeeList")->with('data',$d);

}

    public function emp_view(Request $request){

     
      $d= DB::table('admins')->paginate(10); //Query Builder
      //Or you can use
      $d= admin::paginate(10); //Eloquent ORM
      
        return view("employeeEmployeeList")->with('data',$d);
      }

      public function addImage(){
        return view('add_image');
    }

     public function storeImage(Request $request){

        // dd($request->all());
    
       $food = new Food;

        
       $food->foodName = $request->input('foodName');

       $food->ingredients = $request->input('ingredients');

       $food->price = $request->input('price');
    

       if($request->file('image')){
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $food['image']= $filename;
    }
    $food->save();
    return Redirect::to('adminMenuView');
    
  

    //  return Redirect::to('adminMenuView')->with('data',$d);
}
          public function viewImage(){

            $imageData= food::all();
          return view('adminMenuView', compact('imageData'));

          }

  
    public function downloadPdf()
    {
        $users = admin::all();

        // share data to view
        view()->share('users-pdf',$users);
        $pdf = PDF::loadView('users-pdf', ['users' => $users]);
        return $pdf->download('users.pdf');
    }
    
    public function deleteMenu($id){

      $data=Food::find($id); 
    
      $data->delete();
      return redirect()->back();
    
    }

    public function updateFoodDetails($id){


      $d =Food::find($id); 
      
      return view('updateAdminFood')->with('data',$d);
    }
    public function updateFood(Request $request){


   
      $id=$request->id;
      $foodName = $request->foodName;
      $ingredients = $request->ingredients;
      $price = $request->price;
  
    
      $d =  DB::update("UPDATE `Food` SET `foodName` = '$foodName', `ingredients` = '$ingredients',
      `price` = '$price'  WHERE `id` = '$id'");
  
      $data=Food::all();
      
      return Redirect::to('adminMenuView')->with('data',$d);
  
  }
  public function updateEmpFoodDetails($id){


    $d =Food::find($id); 
    
    return view('updateEmpFood')->with('data',$d);
  }
  public function updateEmpFood(Request $request){


   
    $id=$request->id;
    $foodName = $request->foodName;
    $ingredients = $request->ingredients;
    $price = $request->price;

  
    $d =  DB::update("UPDATE `Food` SET `foodName` = '$foodName', `ingredients` = '$ingredients',
    `price` = '$price'  WHERE `id` = '$id'");

    $data=Food::all();
    
    return Redirect::to('employeeMenuView')->with('data',$d);

}
}
