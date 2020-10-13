<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Product;

class AdminController extends Controller
{
    public function index()
    {
    	return view('layouts.admin-master');
    }

     public function mail()
    {
    
        return view('email.register-mail');
    }

    public function getUsers()
    {
    	return Product::with(['user'])->get();

    }
}
