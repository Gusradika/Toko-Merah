<?php

namespace App\Models;

use App\Models\barang;
use App\Models\detailPenjualan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama",
        "jumlahPembelian",
        "total",
        "date",
        "profit",
    ];

    protected $guarded = [
        "id"
    ];

    public function detailPenjualan()
    {
        $this->hasMany(detailPenjualan::class);
    }
}
