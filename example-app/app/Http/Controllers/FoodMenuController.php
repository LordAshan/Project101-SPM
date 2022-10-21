<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

use App\Models\Food;

class FoodMenuController extends Controller
{
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
    return Redirect::to('customerMenuView');
    
  

    //  return Redirect::to('adminMenuView')->with('data',$d);
}
public function viewImage(){

  $imageData= food::all();
 return view('customerMenuView', compact('imageData'));
}
}