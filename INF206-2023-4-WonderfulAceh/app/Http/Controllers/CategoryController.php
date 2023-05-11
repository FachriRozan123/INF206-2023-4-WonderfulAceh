<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TempatWisata;
class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.category',['category'=>$category]);
    }
    public function place($slug)
    {
        $category = Category::where('slug',$slug)->get();
        $tempat_wisata=TempatWisata::where('category_id',$category[0]->id)->get();
        return view('category.nama_category',['tempat_wisata'=>$tempat_wisata]);
    }
}
