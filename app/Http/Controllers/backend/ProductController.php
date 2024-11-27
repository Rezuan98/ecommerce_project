<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        
        $category = Category::all();
        $subcategory = Subcategory::all();
        $brand = Brand::all();

        return view('backend.product.create',compact('category','brand','subcategory'));
    }


   

public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'discount_price' => 'nullable|numeric|min:0',
        'stock_quantity' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
        'subcategory_id' => 'nullable|exists:subcategories,id',
        'brand_id' => 'nullable|exists:brands,id',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Max file size 2MB
        'is_active' => 'nullable|boolean',
    ]);

    
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    
    $product = new Product();
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->discount_price = $request->input('discount_price');
    $product->stock_quantity = $request->input('stock_quantity');
    $product->category_id = $request->input('category_id');
    $product->subcategory_id = $request->input('subcategory_id');
    $product->brand_id = $request->input('brand_id');
    $product->image = $imagePath;
    $product->is_active = $request->input('is_active', true); 
   
    $product->save();

   
    return redirect()->back()->with('success', 'Product added successfully!');
}
public function getSubcategories(Request $request)
{
    
    $request->validate([
        'category_id' => 'required|exists:categories,id',
    ]);

    
    $subcategories = Subcategory::where('category_id', $request->category_id)->get();

    
    return response()->json([
        'subcategories' => $subcategories,
    ]);
}


    

   
        public function index()
        {
            $products = Product::with('category', 'subcategory', 'brand')->get(); // Fetch products with relationships
            return view('backend.product.index', compact('products'));
        }
        
    

    public function edit($id){

        
       
            $product = Product::findOrFail($id);
            $categories = Category::all(); 
            $subcategories = SubCategory::where('category_id', $product->category_id)->get(); // Get subcategories for the product's category
            $brands = Brand::all(); 
        
            return view('backend.product.edit', compact('product', 'categories', 'subcategories', 'brands'));
        }
        
        public function update(Request $request, $id)
        {
            // Validate the incoming request
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'required|numeric|min:0',
                'discount_price' => 'nullable|numeric|min:0',
                'stock_quantity' => 'required|integer|min:0',
                'category_id' => 'required|exists:categories,id',
                'subcategory_id' => 'nullable|exists:subcategories,id',
                'brand_id' => 'nullable|exists:brands,id',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Max file size 2MB
            ]);
        
            $product = Product::findOrFail($id); // Find the product to update
        
            // Handle image upload if provided
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                    unlink(storage_path('app/public/' . $product->image));
                }
        
                // Store the new image
                $imagePath = $request->file('image')->store('products', 'public');
                $product->image = $imagePath;
            }
        
            // Update product details
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->discount_price = $request->input('discount_price');
            $product->stock_quantity = $request->input('stock_quantity');
            $product->category_id = $request->input('category_id');
            $product->subcategory_id = $request->input('subcategory_id');
            $product->brand_id = $request->input('brand_id');
            $product->is_active = $request->input('is_active', true); // Default to true
        
            $product->save(); // Save the updated product
        
            return redirect()->route('index.product')->with('success', 'Product updated successfully!');
        }

    public function delete($id){

        $delete = Product::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Category Deleted!');
    }

    
}
