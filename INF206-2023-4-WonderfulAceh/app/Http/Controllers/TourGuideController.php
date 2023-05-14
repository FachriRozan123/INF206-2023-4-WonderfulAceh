<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;
use Illuminate\Support\Facades\DB;

class TourGuideController extends Controller
{   
    public function index()
    {
        //
        $tour_guide=DB::table('tour_guide')->get();
            return view('tour_guide.index')
            ->with('tour_guide',$tour_guide);
    }
    public function create()
    {
        $tempat_wisata = DB::table('tempat_wisata')->get();
        return view('tour_guide.addTourGuide', ['tempat_wisata' => $tempat_wisata,]);
    }
    public function store(Request $request)
    {   
        $tempat_wisata = DB::table('tempat_wisata')
    ->where('id', 'LIKE', '%' . $request->id . '%')
    ->first();

$tempat_wisata_id = null;

if ($tempat_wisata) {
    $tempat_wisata_id = $tempat_wisata->id;
}        
        if($request->file('image')){
            $link = 'storage/img/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('storage/img', $link);
       }
        TourGuide::create([
            'nama_tempat'=>$request['nama_tempat'],
            'alamat'=>$request['alamat'],
            'nama'=>$request['nama'],
            'nomor_hp'=>$request['nomor_hp'],
            'nama_tempat_id'=>$tempat_wisata_id,
            'deskripsi'=>$request['deskripsi'],
            'image'=>$link,
            'user_id' => auth()->id()
        ]);
        return redirect('/');
    }

}
