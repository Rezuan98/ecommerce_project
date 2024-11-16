<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{


public function Products(){

    return view('frontend.pages.products');
}







    public function ProductDetails(){

        return view('frontend.pages.product_details');
    }


    public function cartPage(){


        return view('frontend.pages.cart');
    } 



    public function grid(){

        return view('frontend.parts.grid');
    }

    public function shipmentInformation(){

        return view('frontend.pages.shipment');
    }
}
