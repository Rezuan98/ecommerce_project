<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
class ShowProductController extends Controller
{


public function Products($id){
    $allcategory = Category::whereIn('home_position', [1, 2, 3, 4, 5, 6, 7, 8, 9])->with('subcategories')->get();

    $products = Product::where('category_id',$id)->get();


    
    // foreach($products as $product) {
    //     $colors = json_decode($product->colors);
    //     $sizes = json_decode($product->sizes);
    
        // if (json_last_error() !== JSON_ERROR_NONE) {
        //     Handle invalid JSON
        //     Optionally, set $product->colors or $product->sizes to a default value
        //     $product->colors = [];
        //     $product->sizes = [];
        // } else {
        //     $product->colors = $colors;
        //     $product->sizes = $sizes;
        // }
    
    
     return view('frontend.pages.products',compact('products','allcategory'));

}

    public function subcategoryProducts($id){


         $subcategory_products = Subcategory::where('id',$id)->with('product')->get();

         $allcategory = Category::whereIn('home_position', [1, 2, 3, 4, 5, 6, 7, 8, 9])->with('subcategories')->get();

   
         return view('frontend.pages.subcategory_products',compact('subcategory_products','allcategory'));
    }








    public function ProductDetails($id){


        $product_details = Product::where('id',$id)->first();

        
    


        return view('frontend.pages.product_details',compact('product_details'));
    }


    public function cartPage(){


        return view('frontend.pages.cart');
    } 



    public function grid(){

        return view('frontend.parts.grid');
    }

    
}
