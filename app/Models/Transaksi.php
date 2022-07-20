<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function jenis_sampahs()
    {
        $this->belongsToMany(JenisSampah::class, 'detail_transaksis', 'id_transaksi', 'id_jenis_sampah');
    }
    public function driver()
    {
        $this->belongsTo(Driver::class);
    }
    public function admin()
    {
        $this->belongsTo(Admin::class);
    }
}
