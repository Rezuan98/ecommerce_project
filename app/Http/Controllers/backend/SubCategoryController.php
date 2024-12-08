<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Str;

class SubCategoryController extends Controller
{
    public function create(){

        $categories = Category::all();

        return view('backend.sub-category.create',compact('categories'));
    }


    public function store(Request $request){




        

    // $request->validate([
    //     'category_id' => 'required|exists:categories,id',
    //     'name' => 'required|string|max:255',
    //     'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    // ]);

    if ($request->hasFile('subcategory_image')) {
        $subcategory_image = $request->file('subcategory_image');
        $filename = time() . '.' . $subcategory_image->getClientOriginalExtension();
        $path = $subcategory_image->storeAs('subcategory_images', $filename, 'public');
        
    }
    $subcategory = new Subcategory();
    $subcategory->category_id = $request->category_id;
    $subcategory->subcategory_name = $request->subcategory_name;

    $subcategory->slug = str::slug($request->subcategory_name);

    $subcategory->image = $path;

    $subcategory->save();

    return redirect()->back()->with('success', 'Sub-Category added successfully!');
}

public function index(){
    $subcategory = Subcategory::with('category')->get();


    
    return view('backend.sub-category.index',compact('subcategory'));
}


public function fetch(Request $request)
{
    // Validate the incoming category ID
    $request->validate([
        'category_id' => 'required|exists:categories,id',
    ]);

    // Fetch the subcategories for the given category ID
    $subcategories = SubCategory::where('category_id', $request->category_id)->get();

    // Return the subcategories as a JSON response
    return response()->json([
        'subcategories' => $subcategories,
    ]);
}

    public function edit($id){
       
        $categories = Category::all();
        $edit_subcategory = Subcategory::where('id',$id)->first();

       
        
        return view('backend.sub-category.edit',compact('edit_subcategory','categories'));
    }


    public function update(Request $request){


        if ($request->hasFile('subcategory_image')) {
            $subcategory_image = $request->file('subcategory_image');
            $filename = time() . '.' . $subcategory_image->getClientOriginalExtension();
            $path = $subcategory_image->storeAs('subcategory_images', $filename, 'public');
            $subcategory->image = $path;
        }
        $subcategory =  Subcategory::findOrFail($request->id);
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name = $request->subcategory_name;
    
        $subcategory->slug = str::slug($request->subcategory_name);
    
        $subcategory->save();


        return redirect()->route('index.subcategory')->with('success','Subcategory updated');
        
    }
    public function delete($id){

        $delete_subcategory = Subcategory::where('id',$id)->delete();
        return redirect()->back()->with('success', 'subcategory Deleted!');
    }


    // subcategory methodes end
}
