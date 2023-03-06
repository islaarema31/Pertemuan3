<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // public function index()
    // {
    //     return view('product');
    // }
    public function marbelEdu()
    {
        return view('products.marbelEdu');
    }
    public function marbelFriend()
    {
        return view('products.marbelFriend');
    }
    public function riri()
    {
        return view('products.riri');
    }
    public function kolak()
    {
        return view('products.kolak');
    }
}
