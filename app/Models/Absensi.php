<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory, SoftDeletes;

	  protected $table = 'absensi';
    protected $fillable = ['nama','kelas','jurusan','guru','nrp','mata_pelajaran','foto','waktu','deleted_at'];

    public $timestamps = false;
    protected $dates = ['deleted_at'];
    protected $softDelete = true;
}
