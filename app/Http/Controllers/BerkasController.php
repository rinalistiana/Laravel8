<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    public function unggah(Request $req){
    	$path = $req -> file('berkas')->storeAs(
    		'berkas', $req->file('berkas')->getClientOriginalName(),
    		'public'
    	);
    	return view('hasil-unggah', [
    		'path' => $path,
    	]);
    }

    public function unduh(Request $req) {
    	return Storage::download($req->berkas);
    }
}
