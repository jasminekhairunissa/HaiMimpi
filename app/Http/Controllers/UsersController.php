<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
    	#code...
    	return view('admin/tabel/tabel_users');
    }
}
