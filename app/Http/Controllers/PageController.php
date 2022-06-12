<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;

class PageController extends Controller
{
    
    public function index(Request $request)
    {
        $catId = $request->category_id ? $request->category_id : 6;
        $categories = Category::whereNull('parent_id')->with('child')->get();
        $language = $request->language === 'ru';

        //$childCategoryIds = Category::where('parent_id', $catId)->pluck('id')->toArray();

        /* $category_images = Image::select(['id','category_id','image'])
            ->byCategory($childCategoryIds)
            ->get(); */

        //$category_images = Image::where('category_id', $catId)->get()->random(9); randomna chiqaradi va agar randomda berilgan qiymatdan kam bo`lsa xatolik beradi
        $category_images = Image::where('category_id', $catId)->orderBy('id', 'desc')->get()->take(9);

        return view('index', compact('categories', 'category_images', 'language'));
    }

    public function test()
    {
        return redirect()->back();
    }

}
