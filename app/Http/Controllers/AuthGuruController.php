<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\Aktivitas;
use Illuminate\Http\Request;

class AuthGuruController extends Controller
{
  public function login()
  {
    return view('pages.auth.login_guru');
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

      Aktivitas::create([
        'id_user' => auth()->user()->id,
        'aktivitas' => 'Login to the system with NRP '.auth()->user()->username,
        'icon' => 'fas fa-unlock',
        'date' => Carbon::now()->locale('id')->isoFormat('LLLL')
      ]);

      return redirect('/guru/dashboard');
    }else{
      return redirect('/login/guru')->with(['message' => 'Username dan password salah!']);
    }
  }

  public function logout()
  {
    Aktivitas::create([
      'id_user' => auth()->user()->id,
      'aktivitas' => 'Logout with NRP '.auth()->user()->username,
      'icon' => 'fas fa-sign-out-alt',
      'date' => Carbon::now()->locale('id')->isoFormat('LLLL')
    ]);

    \Auth::logout();
    return redirect('/login/guru')->with(['logout' => 'Anda telah logout!']);
  }
}
