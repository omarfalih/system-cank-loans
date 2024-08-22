<?php

namespace App\Http\Controllers;

// use App\Models\Offer;

use App\Models\Offer;
use App\Models\UserOffer;
use App\Models\User;
use Illuminate\Http\Request;

class MyHomeController extends Controller
{

    function index()
    {
        $offers = Offer::all();
        return view('welcome')->with('offers',$offers);    
    }


    function UsersOffers($id)  
    {
        // return $id;
        $offer = Offer::find($id);
        if($offer){
            // check
            $check = UserOffer::where('user_id', auth()->user()->id)->where('offer_id',$offer->id)->count();
            if($check > 0){
                return redirect()->back()->with('error' ,'لقد قدمت مسبقاً على هذه الخدمة ');
            }

            // create new row
            $userOffer = new UserOffer();
            $userOffer->user_id = auth()->user()->id;
            $userOffer->offer_id = $offer->id;
            $userOffer->save();
        }

        $smg = ' تم التقديم بنجاح ' . $offer->name . " " .  $offer->price;

        return redirect()->back()->with('success' ,$smg);
    }
}
