<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['kode_transaksi', 'anggota_id', 'acara_id', 'tgl_transaksi', 'bank', 'rek', 'rupiah', 'status', 'ket'];

    public function anggota()
    {
    	return $this->belongsTo(Anggota::class);
    }

    public function acara()
    {
    	return $this->belongsTo(Acara::class);
    }
}
