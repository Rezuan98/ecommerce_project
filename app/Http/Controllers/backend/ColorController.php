<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use Str;

class ColorController extends Controller
{
    public function create(){
        return view('backend.color.create');
    }


    public function store(Request $request){


        


        $info = new Color();
        $info->name = $request->name;
        $info->slug = Str::slug($request->name);
        
        $info->save();
        return redirect()->back()->with('success', 'Color created successfully!');
    }

    public function index(){
        $info = Color::all();
        return view('backend.color.index',compact('info'));
    }

    public function edit($id){

        $edit = Color::where('id',$id)->first();
        return view('backend.color.edit',compact('edit'));
    }



    public function update(Request $request){


        
        $color =  Color::findOrFail($request->id);
        
        $color->name = $request->name;
    
        $color->slug = str::slug($request->name);
       
    
        $color->save();


        return redirect()->route('index.color')->with('info','color updated');
    }

    public function delete($id){

          Color::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Color Deleted!');
    }
}
