<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jawaban extends Model
{
    protected $fillable = ['isi','tgl_dibuat','tgl_diperbaharui','pertanyaan_id'];
    public static function get_all()
    {
        $data = DB::table('jawabans')->get();
        return $data;
    }

    public function pertanyaan()
    {
        return $this->belongsTo(pertanyaan::class);
    }
}
