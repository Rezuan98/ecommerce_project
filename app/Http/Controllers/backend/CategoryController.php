<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Str;

class categoryController extends Controller
{
    public function create(){
        return view('backend.category.create');
    }


    public function store(Request $request){

        $info = new Category();

        if ($request->hasFile('icon')) {
        $icon = $request->file('icon');
            $filename = time() . '.' . $icon->getClientOriginalExtension();
            $path = $icon->storeAs('category-icons', $filename, 'public');
            $info->icon = $path;
         }


        
        $info->name = $request->name;
        $info->slug = Str::slug($request->name);
       
         
       
        $info->save();
        return redirect()->back()->with('success', 'Category created successfully!');
    }


    public function displayPosition(Request $request,$id){

        Category::where('id',$id)->update([

            'home_position' => $request->selected_display,
        ]);

   
        return redirect()->back();


    }

    public function index(){
        $category = Category::all();
        return view('backend.category.index',compact('category'));
    }

    public function editCategory($id){

        $edit_category = Category::where('id',$id)->first();
        return view('backend.category.edit_category',compact('edit_category'));
    }



    public function update(Request $request){


        if ($request->hasFile('icon')) {
            $category_image = $request->file('icon');
            $filename = time() . '.' . $category_image->getClientOriginalExtension();
            $path = $category_image->storeAs('category_images', $filename, 'public');
           
        }
        $category =  Category::findOrFail($request->id);
        
        $category->name = $request->name;
    
        $category->slug = str::slug($request->name);
        $category->icon = $path;
    
        $category->save();


        return redirect()->route('index.category')->with('info','category updated');
    }

    public function deleteCategory($id){

        $subcategory = Subcategory::find($id);

       
        if($subcategory){
          
            return redirect()->back()->with('error', 'Please delete the child subcategories and try again.');;
        }

        $delete_category = Category::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Category Deleted!');
    } 
}
