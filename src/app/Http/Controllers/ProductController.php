<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        return view('list');
    }

    public function detail()
    {
        return view('detail');
    }

    public function cart()
    {
        return view('cart');
    }

    public function address()
    {
        return view('address');
    }

    public function complete()
    {
        return view('complete');
    }
}
