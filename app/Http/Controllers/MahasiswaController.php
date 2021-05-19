<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function home() {
    	$hasil = Mahasiswa::all();
    	return view('list-mahasiswa', [ 'data' => $hasil ]);
    }

    public function tambah(Request $req) {
    	$data = new Mahasiswa;
    	$data->nim = $req->nim;
    	$data->nama = $req->nama;
    	$data->kelas = $req->kelas;
    	$data->save();

    	return $this->home();
    }

    public function hapus($req) {
    	$data = Mahasiswa::find($req);
    	$data->delete();

    	return $this->home();
    }

    public function formUbah($req) {
    	$hasil = Mahasiswa::find($req);
    	return view('form-ubah-mhs', [ 'data' => $hasil ]);
    }

    public function ubah(Request $req) {
    	$data = Mahasiswa::find($req->id);
    	$data->nim = $req->nim;
    	$data->nama = $req->nama;
    	$data->kelas = $req->kelas;
    	$data->save();

    	return $this->home();
    }
}
