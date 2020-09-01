<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
      public function create()
    {
    	//$users = DB::table('users')->get();//Veritabanından kullanıcıları çeker
    	$users = User::all();
    	//dd($users);
    	return view('users.create',compact('users'));//->with(['users'=>$users]);//merhaba isimli view dosyasına kullanıcılar yollandı.
    }

         public function users()
    {
        //$users = DB::table('users')->get();//Veritabanından kullanıcıları çeker
        $users = User::all();
        //dd($users);
        return view('users.users',compact('users'));//->with(['users'=>$users]);//merhaba isimli view dosyasına kullanıcılar yollandı.
    }
   
}
