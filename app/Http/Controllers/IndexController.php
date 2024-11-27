<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\DisplayBanner;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::whereIn('home_position', [1, 2, 3, 4, 5, 6, 7, 8, 9])->get();

    
        $display_1 = Category::where('home_position', '1')->first();
        $display_1_product = null;
    
        if ($display_1) {
           
            $display_1_product = Product::where('category_id', $display_1->id)->limit(8)->get();
        } else {
            
            $display_1_product = collect(); 
        }






        $display_2 = Category::where('home_position', '2')->first();
        $display_2_product = null;
    
        if ($display_2) {
           
            $display_2_product = Product::where('category_id', $display_2->id)->limit(8)->get();
        } else {
            
            $display_2_product = collect(); 
        }




        $display_4 = Category::where('home_position', '4')->first();
        $display_4_product = null;
    
        if ($display_4) {
           
            $display_4_product = Product::where('category_id', $display_4->id)->limit(12)->get();
        } else {
            
            $display_4_product = collect(); 
        }


      

         $display_3 = Category::where('home_position','3')->first();
         $display_3_products = Category::where('home_position','3')->with('product')->get();

        //  $display_4 = Category::where('home_position','4')->first();
        //  $display_4_category = Category::where('home_position','4')->with('product')->get();


         $card_1 = Category::where('home_position',6)->get();
         $card_2 = Category::where('home_position',7)->get();
         $card_3 = Category::where('home_position',8)->get();


         $products = Category::where('home_position',9)->with('product')->get();

         $display_3 = Category::where('home_position','3')->first();
         $display_3_products = Category::where('home_position','3')->with('product')->get();

        //  $display_4 = Category::where('home_position','4')->first();
        //  $display_4_products = Category::where('home_position','4')->with('product')->limit(5)->get();
         


       $topbanner = DisplayBanner::where('type','image')->latest()->first();
       $text1 = DisplayBanner::where('type','text-1')->latest()->first();
       $text2 = DisplayBanner::where('type','text-2')->latest()->first();

       
         
         return view('frontend.master.index', compact('category', 'display_1', 'display_1_product', 'display_2', 
         'display_2_product','display_3','display_3_products','card_1','card_2','card_3','products','display_4',
         'display_4_product','topbanner','text1','text2'));
    }
    
              
      
    
}
