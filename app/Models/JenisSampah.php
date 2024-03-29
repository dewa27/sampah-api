<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    use HasFactory;
    public function transaksis()
    {
        $this->belongsToMany(Transaksi::class, 'detail_transaksis', 'id_jenis_sampah', 'id_transaksi');
    }
}
