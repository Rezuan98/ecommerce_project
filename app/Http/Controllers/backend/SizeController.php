<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use Str;


class SizeController extends Controller
{
    public function create(){
        return view('backend.size.create');
    }


    public function store(Request $request){


        


        $info = new Size();
        $info->size = $request->size;
        $info->slug = Str::slug($request->size);
        
        $info->save();
        return redirect()->back()->with('success', 'size created successfully!');
    }

    public function index(){
        $info = Size::all();
        return view('backend.size.index',compact('info'));
    }

    public function edit($id){

        $edit = Size::where('id',$id)->first();
        return view('backend.size.edit',compact('edit'));
    }



    public function update(Request $request){


        
        $size =  Size::findOrFail($request->id);
        
        $size->size = $request->size;
    
        $size->slug = str::slug($request->size);
       
    
        $size->save();


        return redirect()->route('index.size')->with('success','size updated');
    }

    public function delete($id){

          Size::where('id',$id)->delete();
        return redirect()->back()->with('success', 'size Deleted!');
    }
}
