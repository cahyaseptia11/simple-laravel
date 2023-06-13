<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kendaraan',
        'jenis_kendaraan',
        'nama_kendaraan',
        'jumlah_penjualan',
    ];
}
