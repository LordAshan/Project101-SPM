<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;


use App\Models\Reviews;

class ReviewController extends Controller
{



    
    public function addImage(){
        return view('add_image');
    }

    public function storeImage(Request $request){

        // dd($request->all());
     
    
       $reviews = new Reviews;

        
       $reviews->customerName = $request->input('customerName');

       $reviews->complaint = $request->input('complaint');



       if($request->file('image')){
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $reviews['image']= $filename;
    }
   
    $reviews->save();

    return Redirect::to('customerReviewView');
    
  

    //  return Redirect::to('adminMenuView')->with('data',$d);
}
public function viewImage(){

  $imageData= Reviews::all();
 return view('customerReviewView', compact('imageData'));
 
}

    //
}
