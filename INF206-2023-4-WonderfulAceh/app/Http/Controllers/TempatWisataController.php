<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;
use App\Models\TourGuide;
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
        $tempat = TempatWisata::where('slug', 'LIKE', $slug)->first();
    if ($tempat) {
    $tour_guide = TourGuide::where('nama_tempat_id', $tempat->id)->get();
    }
        return view('holiday.tempat',['tempat'=>$tempat,'tour_guide'=>$tour_guide]);
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

       if($request->file('image')){
            $link = 'storage/img/'.time().'-'.$request->image->getClientOriginalName();
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
            'image'=>$link,
            'user_id' => auth()->id()
        ]);
        return redirect('/');
    }
    public function thisorthat(){
        $category = DB::table('category')->get();
        return view('thisorthat.thisorthat', ['category' => $category,]);
    }
    public function storeAnswer(Request $request)
    {
        $answer1 = $request->input('answer1');
        $answer2 = $request->input('answer2');
        $answer3 = $request->input('answer3');
        $tempat1 = TempatWisata::where('category_id','LIKE',$answer1)->get();
        $tempat2= TempatWisata::where('category_id','LIKE',$answer2)->get();
        $tempat3 = TempatWisata::where('category_id','LIKE',$answer3)->get();
        return view('thisorthat.hasil', ['tempat1' => $tempat1,'tempat2' => $tempat2,'tempat3' => $tempat3]);
        // Lakukan operasi lain dengan nilai jawaban yang didapatkan
    }
    
}