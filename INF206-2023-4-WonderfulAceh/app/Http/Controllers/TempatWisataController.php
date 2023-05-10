<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class TempatWisataController extends Controller
{   
    public function index()
    {
        //
        $tempat_wisata=DB::table('tempat_wisata')->get();
            return view('holiday.index')
            ->with('tempat_wisata',$tempat_wisata);
    }
    public function place($slug)
    {
        $tempat = TempatWisata::where('slug','LIKE',$slug)->get();
        return view('holiday.tempat',['tempat'=>$tempat]);
    }

    public function searchByName(Request $request)
    {
        $query = $request->input('query');
        
        $tempat_wisata = TempatWisata::where('nama_tempat', 'LIKE', "%$query%")->get();
        
        return view('holiday.search', compact('tempat_wisata'));
    }
    
    public function create()
    {
        $category = DB::table('category')->get();
        return view('holiday.addTempat', ['category' => $category,]);
    }
    public function store(Request $request)
    {
        $category = DB::table('category')
    ->where('category', 'LIKE', '%' . $request->kategori . '%')
    ->first();

$category_id = null;

if ($category) {
    $category_id = $category->id;
}        
        // $array = Category::find('category',$request->category);
        // dd($category);

        // $request['category'] =$array->id;
       if($request->file('image')){
            $link = 'img/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('storage/img', $link);
       }
        TempatWisata::create([
            'slug'=>strtolower(str_replace(' ', '_', $request->nama_tempat)),
            'nama_tempat'=>$request['nama_tempat'],
            'alamat'=>$request['alamat'],
            'nama_pemilik'=>$request['nama_pemilik'],
            'nomor_pemilik'=>$request['nomor_pemilik'],
            'category_id'=>$category_id,
            'deskripsi'=>$request['deskripsi'],
            'image'=>$link
        ]);
        return redirect('/');
    }

}
