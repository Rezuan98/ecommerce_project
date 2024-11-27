<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisplayBanner;
use Storage;


class BannerController extends Controller
{
    public function index()
    {
        $banners = DisplayBanner::all();
        return view('backend.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('backend.banner.create');
    }

    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'type' => 'required|in:image,text-1,text-2',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'title' => 'nullable|string|max:255',
        'heading' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ]);

    // Create a new DisplayBanner instance
    $banner = new DisplayBanner();

    // Assign request data to the model fields
    $banner->type = $request->type;
    $banner->banner_title = $request->title;
    $banner->banner_head = $request->heading;
    $banner->banner_description = $request->description;

    // Handle image upload if it exists
    if ($request->hasFile('image')) {
        $banner->image = $request->file('image')->store('banners', 'public');
    }

    // Save the data into the database
    $banner->save();

    // Redirect to the banner list with a success message
    return redirect()->route('index.banner')->with('success', 'Banner created successfully.');
}


    public function edit(DisplayBanner $banner)
    {
        return view('backend.banner.edit', compact('banner'));
    }

    public function update(Request $request, DisplayBanner $banner)
    {
        $request->validate([
            'type' => 'required|in:image,text',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'title' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::delete('public/' . $banner->image);
            }
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner->update($data);

        return redirect()->route('index.banner')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::delete('public/' . $banner->image);
        }
        $banner->delete();

        return redirect()->route('backend.banner.index')->with('success', 'Banner deleted successfully.');
    }
}
