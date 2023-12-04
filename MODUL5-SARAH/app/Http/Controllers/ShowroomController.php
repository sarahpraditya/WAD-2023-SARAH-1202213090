<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
  public function index()
  {
    $showroom = Showroom::all();
    return view('showroom/index', compact('Showroom'));
  }

  public function create()
  {
    return view('showroom/create');
  }

  public function store(Request $request)
  {
    $data = $request->all();

    Mobil::create([
      'nama_mobil' => $data['name'],
      'brand_mobil' => $data['brand'],
      'warna_mobil' => $data['warna'],
      'tipe_mobil' => $data['tipe'],
      'harga_mobil' => $data['harga'],
    ]);

    return redirect(route('showroom.index'))->with('success', "Mobil {$data['name']} berhasil ditambahkan");
  }
}
