<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absensi extends Model
{
    use SoftDeletes;

	protected $table = 'absensi';
    protected $guarded = [];

    public $timestamps = FALSE;
    protected $dates = ['deleted_at'];
    protected $softDelete = TRUE;
}
