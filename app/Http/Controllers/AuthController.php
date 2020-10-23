<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function login()
  {
    return view('auth.login');
  }

  public function postLogin(Request $request)
  {
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required'
    ]);

    if(auth()->attempt(['username' => $request->username, 'password' => $request->password]))
    {
      User::where('username', \Auth::user()->username)->update(['login_date' => Carbon::now()->locale('id')->isoFormat('LLLL')]);

      return redirect('/admin/dashboard');
    }else{
      return redirect('/login/admin')->with(['message' => 'Username dan password salah!']);
    }
  }

  public function logout()
  {
      \Auth::logout();
      return redirect('/login/admin')->with(['logout' => 'Anda telah logout!']);
  }
}
