<?php

namespace App\Models;

use App\Models\kategori;
use App\Models\penjualan;
use App\Models\tambahStok;
use App\Models\detailPenjualan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama",
        "kategori_id",
        "hargaBeli",
        "hargaJual",
        "profit",
        "stok",
    ];

    protected $guarded = [
        "id"
    ];

    public function kategori()
    {
        $this->belongsTo(kategori::class);
    }

    public function tambahStok()
    {
        $this->hasMany(tambahStok::class);
    }

    public function detailPenjualan()
    {
        $this->hasMany(detailPenjualan::class);
    }
}
