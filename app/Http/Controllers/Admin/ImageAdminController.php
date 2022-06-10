<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Category;
use App\Http\Requests\ImageStoreRequest;

class ImageAdminController extends Controller
{
    
    public function index()
    {
        $images = Image::with(['category:id,parent_id,name'])->orderBy('id', 'desc')->paginate(10);

        return view('admin.photo.index', compact('images'));
    }

    public function create()
    {
        $category = Category::whereNotNull('parent_id')->get();
        return view('admin.photo.create', compact('category'));
    }

    public function store(ImageStoreRequest $request)
    {
        $validated = $request->validated();

        $full_path = null;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_img"."."."$extension";
            $uploaded->move(public_path('assets/img/blog'), $image_name);
            $full_path = '/assets/img/blog/'.$image_name;
        }

        $validated['image'] = $full_path;

        $created = Image::create($validated);
        if($created){
            return redirect()->route('admin.photo.index')->with(['success' => __('Created')]);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $item = Image::findOrFail($id);
        $category = Category::whereNotNull('parent_id')->get();
        return view('admin.photo.edit', compact('item','category'));
    }

    public function update($id, ImageStoreRequest $request)
    {
        $images = Image::find($id);
        
        $validated = $request->validated();

        $full_path = $images->image;
        if($uploaded = $request->file('image')){

            $uploaded = $request->file('image');
            $extension = $uploaded->getClientOriginalExtension();
            $image_name = time()."_img"."."."$extension";
            $uploaded->move(public_path('assets/img/blog'), $image_name);
            $full_path = '/assets/img/blog/'.$image_name;
        }

        $validated['image'] = $full_path;

        $update = $images->update($validated);
        if($update){
            return redirect()->route('admin.photo.index')->with(['success' => __('Changed')]);
        }
        return redirect()->back();

    }

    public function destroy($id)
    {
        $item = Image::find($id);
        $item->delete();
        return redirect()->route('admin.photo.index')->with(['success' => __('Deleted')]);
    }

}
