<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class UserOfferController extends Controller
{
    function index()
    {
        $usersOffer = UserOffer::select('users_offers.*','users.name as user_name' ,'offers.name as offer_name','offers.price')
            ->join('users','users.id','users_offers.user_id')
            ->join('offers','offers.id','users_offers.offer_id')
            ->get();

        // return $usersOffer;

        return view('admin.users_offers.index')->with('usersOffer',$usersOffer);
    }




}
