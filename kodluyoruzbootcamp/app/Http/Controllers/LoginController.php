<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function loginView()
    {
      return view('users.login');
    }

    public function login(Request $request)
    {
      //Auth::attempt([$email,$password],true);
      $users=User::all();
      $email=$request->get('email');
      $password=$request->get('password');
      //$hashedPassword=Hash::make($password); daha sonra anlatılacak
      $user=User::where('email',$email)->where('password',$password)->get();

        if(isset($user))
        {
          return view('users.index',compact('users'));
        }
        else 
        {
            return 'Böyle bir kullanıcı bulunamadı';
        }
    }
}
