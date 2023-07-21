<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->foreignid("kategori_id");
            $table->bigInteger("hargaBeli")->default(0);
            $table->bigInteger("hargaJual")->nullable();
            $table->bigInteger("profit")->default();
            $table->bigInteger("stok")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
