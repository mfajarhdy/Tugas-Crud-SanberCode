<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pertanyaan extends Model
{
    protected $fillable = ['judul','isi','tgl_dibuat','tgl_diperbaharui'];

    public static function get_all()
    {
        $data = DB::table('pertanyaans')->get();
        return $data;
    }

    public function jawaban()
    {
        return $this->hasMany(jawaban::class);
    }

}
