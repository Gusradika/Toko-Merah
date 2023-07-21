<?php

namespace App\Models;

use App\Models\barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        "namaKategori",
    ];

    protected $guarded = [
        "id"
    ];

    public function barang()
    {
        $this->hasMany(barang::class);
    }
}
