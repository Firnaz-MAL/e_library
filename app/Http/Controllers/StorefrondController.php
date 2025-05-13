<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorefrondController extends Controller
{
    public function index()
    {
        return view('frondend.storefrond');
    }
}
