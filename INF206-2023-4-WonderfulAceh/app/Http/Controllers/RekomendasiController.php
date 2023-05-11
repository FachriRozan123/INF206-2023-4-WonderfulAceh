<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function index()
    {
        return view('rekomendasi');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Lakukan logika pencarian berdasarkan keyword
        // ...

        // Misalnya, jika pencarian sukses, Anda dapat mengarahkan pengguna ke halaman hasil pencarian
        return redirect()->route('hasil_pencarian', ['keyword' => $keyword]);
    }
}
