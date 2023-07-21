<?php

namespace App\Models;

use App\Models\barang;
use App\Models\penjualan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detailPenjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        "barang_id",
        "jumlah",
        "subTotal",
        "subProfit",
        "penjualan_id",
    ];

    protected $guarded =  [
        "id"
    ];

    public function barang()
    {
        $this->belongsTo(barang::class);
    }

    public function penjualan()
    {
        $this->belongsTo(penjualan::class);
    }
}
