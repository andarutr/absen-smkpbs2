<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\User;
use App\Absensi;
use Illuminate\Http\Request;
use App\MataPelajaran;

class AbsensiController extends Controller
{
	public function index($username)
	{
	    $matpel = MataPelajaran::where('nrp', $username)->get();
	    $username = User::where('username', $username)->first();

	    return view('absensi', compact('username','matpel'));
	}

	public function list_absensi()
	{
	    $guru = User::all();

	    return view('list_absensi', compact('guru'));
	}

	public function absensi(Request $request, $username)
	{
	      $this->validate($request, [
	        'nama'            => 'required',
	        'mata_pelajaran'  => 'required',
	        'kelas'           => 'required',
	        'jurusan'         => 'required',
	        'foto'            => 'required'
	      ]);

	      $username = User::where('username', $username)->first();
	      $absensi = Absensi::where(['nama' => $request->nama,'mata_pelajaran' => $request->mata_pelajaran])->count();

	      if($absensi > 0)
	      {
	          return redirect("/$username->username")->with(['failed' => 'Anda sudah absen hari ini!']);
	      }else{
	          $file = $request->file('foto');
	          $img = Image::make($file)->fit(250);
	          $img->save("img/absensi/$request->jurusan/$request->kelas/".str_replace(' ', '_', $request->nama).$request->kelas.$request->jurusan.$request->mata_pelajaran.date('m.d.y').".jpg");

	          Absensi::create([
	            'nama'            => $request->nama,
	            'kelas'           => $request->kelas,
	            'foto'            => str_replace(' ', '_', $request->nama).$request->kelas.$request->jurusan.$request->mata_pelajaran.date('m.d.y').".jpg",
	            'jurusan'         => str_replace(' ', '-', $request->jurusan),
	            'guru'            => $username->name,
	            'nrp'             => $username->username,
	            'mata_pelajaran'  => $request->mata_pelajaran,
	            'waktu'           => Carbon::now()->locale('id')->isoFormat('LLLL')
	          ]);

	          return redirect("/$username->username")->with(['message' => 'Terimakasih telah hadir hari ini!']);
	    }
	}
}
