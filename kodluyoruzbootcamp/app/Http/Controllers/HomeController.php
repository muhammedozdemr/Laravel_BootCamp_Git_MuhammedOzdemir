<?php

namespace App\Http\Controllers;


use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function merhaba()
    {
    	//$users = DB::table('users')->get();//Veritabanından kullanıcıları çeker
    	//$users = User::all();
    	//dd($users);
    	//var_dump($users);
    	
    	//$products = Product::with(['user'])->get();
    	
    	
    	    $products=DB::table('products')
            ->join('users','users.id','products.created_by')
            ->select('users.name as yeni','products.name')
            ->get();
           
            
      /*
            $products=Product::with(['user'])//urun tablosundaki tüm kolonları çek
            ->join('users','products.created_by','users.id')
            ->select('users.name','products.name')
            ->get();
           	*/

           	/*$products=Product::with(['user'])//urun tablosundaki tüm kolonları çek
            ->join('users','products.created_by','users.id')
            ->select('products.name','users.name')
            ->get();
            */

    		
    	return view('merhaba',compact('products'));//->with(['users'=>$users]);//merhaba isimli view dosyasına kullanıcılar yollandı.
    }

    public function createView()
    {
    	return view('users.create');
    }
    public function create()
    {
    	return 'Kayıt başarıyla tamamlandı!';
    }
}
