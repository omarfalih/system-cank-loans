<?php

namespace App\Http\Controllers;

// use App\Models\Offer;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{

    function index()
    {
        return view('login_user');    
    }


    function register()
    {
        return view('register_user');    
    }


    

    // function save(Request $request) 
    // {
    //     $offer = null;
    //     // return $request;
    //     if(isset($request->id)&& !empty($request->id)){
    //         // update 
    //         $offer =  Offer::find($request->id);
    //     }else{
    //         // add
    //         $offer = new Offer();
    //     }
        
    //     $offer->name = $request->name;
    //     $offer->price = $request->price;
    //     $offer->salary_min = $request->salary_min;
    //     $offer->salary_max = $request->salary_max;
    //     $offer->save();
        
    //     return redirect()->route('offer')->with('success','Success');
    // }
   
    // function delete($id)
    // {
    //     $offer =  Offer::find($id);
    //     $offer->delete();
    //     return redirect()->route('offer')->with('success','Deleted Success');
    // }

}
