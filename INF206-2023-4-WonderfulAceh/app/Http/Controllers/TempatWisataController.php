<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;
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
    public function create()
    {
        //
        $users=DB::table('users')->get()->pluck('name','id')->prepend('none');
        $tempat_wisata=DB::table('tempat_wisata')->get()->pluck('number','id');
        return view('bookings.create')
        ->with('users',$users)
        ->with('$tempat_wisata',$tempat_wisata);
    }
    public function store(Request $request)
    {
        //
        $id=DB::table('tempat_wisata')->insertGetId([
            'nama_tempat'=>$request->input('nama_tempat'),
            'alamat'=>$request->input('alamat'),
            'nama_pemilik'=>$request->input('nama_pemilik'),
            'nomor_pemilik'=>$request->input('nomor_pemilik'),
            'kategori'=>$request->input('kategori'),
            'deskripsi'=>$request->input('deskripsi')
        ]); 

    //     DB::table('bookings_users')->insert([
    //         'booking_id'=>$id,
    //         'user_id'=>$request->input('user_id')
    //     ]);
    }

}
