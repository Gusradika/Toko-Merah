<?php

namespace App\Models;

use App\Models\barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tambahStok extends Model
{
    use HasFactory;

    protected $fillable = [
        "barang_id",
        "jumlah",
    ];

    protected $guarded = [
        "id"
    ];

    public function barang()
    {
        $this->belongsTo(barang::class);
    }
}
