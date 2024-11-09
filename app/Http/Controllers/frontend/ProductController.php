<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductDetails(){

        return view('frontend.pages.product_details');
    }

    public function grid(){

        return view('frontend.parts.grid');
    }
}
