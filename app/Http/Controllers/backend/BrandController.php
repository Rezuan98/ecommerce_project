<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Str;

class BrandController extends Controller
{
    public function create(){
        return view('backend.brand.create');
    }


    public function store(Request $request){


        if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $path = $logo->storeAs('brand_images', $filename, 'public');
            
         }


        $info = new Brand();
        $info->name = $request->name;
        $info->slug = Str::slug($request->name);
         $info->logo = $path;
        $info->save();
        return redirect()->back()->with('success', 'Brand created successfully!');
    }

    public function index(){
        $info = Brand::all();
        return view('backend.brand.index',compact('info'));
    }

    public function edit($id){

        $edit = Brand::where('id',$id)->first();
        return view('backend.brand.edit',compact('edit'));
    }



    public function update(Request $request){


        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $path = $logo->storeAs('brand_images', $filename, 'public');
           
        }
        $brand =  Brand::findOrFail($request->id);
        
        $brand->name = $request->name;
    
        $brand->slug = str::slug($request->name);
        $brand->logo = $path;
    
        $brand->save();


        return redirect()->route('index.brand')->with('info','category updated');
    }

    public function delete($id){

          Brand::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Brand Deleted!');
    }



}
