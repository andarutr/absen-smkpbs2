<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Aktivitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function index()
  {
    return view('pages.auth.login');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required'
    ]);

    $admin = auth()
                ->attempt([
                  'username' => $request->username, 
                  'password' => $request->password,
                  'id_role' => 1
                ]);
    if(auth()->attempt(['username' => $request->username,'password' => $request->password]))
    {
      User::where('username', \Auth::user()->username)->update(['login_date' => Carbon::now()->locale('id')->isoFormat('LLLL')]);
      
      Aktivitas::create([
        'id_user' => auth()->user()->id,
        'aktivitas' => auth()->user()->name.' Login to the system',
        'icon' => 'fas fa-unlock',
        'date' => Carbon::now()->locale('id')->isoFormat('LLLL')
      ]);
      if(Auth::user()->id_role === 1){
        return redirect('/admin/dashboard')->withSuccess('Selamat Datang!');
      }else{
        return redirect('/guru/dashboard')->withSuccess('Selamat Datang!');
      }
    }else{
      return redirect('/login')->withWarning('Username dan password salah!');
    }
  }

  public function destroy()
  {
    Aktivitas::create([
      'id_user' => auth()->user()->id,
      'aktivitas' => auth()->user()->name.' Logout',
      'icon' => 'fas fa-sign-out-alt',
      'date' => Carbon::now()->locale('id')->isoFormat('LLLL')
    ]);
    
    \Auth::logout();
    return redirect('/login')->withSuccess('Anda telah logout!');
  }
}
