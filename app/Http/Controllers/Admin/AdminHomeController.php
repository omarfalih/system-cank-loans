<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    function index()
    {
        return view('admin.home');    
    }
}
