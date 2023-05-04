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
        return view('tour_guide.addTourGuide');
    }
    public function store(Request $request)
    {
        TourGuide::create([
            'nama_tempat'=>$request['nama_tempat'],
            'alamat'=>$request['alamat'],
            'nama'=>$request['nama'],
            'nomor_hp'=>$request['nomor_hp'],
            'nama_tempat'=>$request['nama_tempat'],
            'deskripsi'=>$request['deskripsi'],
            'image'=>$request['image']
        ]);
        return redirect('/');
    }

}
