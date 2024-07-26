<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home',[
            'title' => 'Home',
            'products' => Product::all(),
            'reviews' => Review::with('user')->get(),
        ]);
    }
}
