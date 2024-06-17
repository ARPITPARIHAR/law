<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Ensure you are importing the correct Controller class
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    // public function index()
    // {
    //     $banners = Banner::all();
    //     return view('user.home', compact('banners'));
    // }
    public function create()
    {
        return view('admin.banners.create');
    }
   
    
    public function store(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $banner->update(['image_path' => 'images/' . $imageName]);
        }

        // Update title and description
        $banner->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Banner updated successfully!');
    }
}

