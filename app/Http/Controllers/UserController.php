<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function home(){
        return view('user-view', ['name' => 'umar']);
    }

    public function setName($data){
        return view('user-view', ['name' => $data]);
    }
}
