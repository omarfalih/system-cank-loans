<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return 'll';
        return view('admin.home');    
    }
}
