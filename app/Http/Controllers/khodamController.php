<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class khodamController extends Controller
{
    public function index(Request $request)
    {
        $khodam = $request->session()->get('khodam');
        $nama = $request->session()->get('nama');
        
        return view('khodam.index', compact('khodam', 'nama'));
    }

    public function prediksi(Request $request)
    {
        $nama = $request->input('nama');
        $khodam = $this->getKhodam($nama);

        return redirect('/')
            ->with('khodam', $khodam)
            ->with('nama', $nama);
    }

    private function getKhodam($nama)
    {
        $khodamList = ['cacing alaska', 'arwah cibalok', 'penunggu cibalok', 'genderowo puncak', 'kuntilanak', 'ka gem'];
        $hash = crc32(strtolower($nama));
        $index = $hash % count($khodamList);
        return $khodamList[$index];
    }
}
