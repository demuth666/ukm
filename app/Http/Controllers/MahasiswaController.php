<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use App\Models\Ukm;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $ukm = Ukm::all();
        return view('dashboard', [
            'ukm' => $ukm
        ]);
    }

    public function store(MahasiswaRequest $request){
        $validated = $request->validated();

        Mahasiswa::create($validated);

        return redirect()->route('dashboard')->with('success', 'Berhasil mendaftar!');
    }
}
