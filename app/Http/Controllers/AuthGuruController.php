<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;

class AuthGuruController extends Controller
{
  public function login()
  {
    return view('auth.login_guru');
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

      return redirect('/guru/dashboard');
    }else{
      return redirect('/login/guru')->with(['message' => 'Username dan password salah!']);
    }
  }

  public function logout()
  {
    \Auth::logout();
    return redirect('/login/guru')->with(['logout' => 'Anda telah logout!']);
  }
}
