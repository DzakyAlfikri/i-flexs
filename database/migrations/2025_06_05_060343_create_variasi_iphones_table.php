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
        Schema::create('variasi_iphones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iphone_id')->constrained('iphones')->onDelete('cascade');
            $table->foreignId('warna_id')->constrained('warnas')->onDelete('cascade');
            $table->foreignId('penyimpanan_id')->constrained('penyimpanans')->onDelete('cascade');
            $table->decimal('harga_sewa_per_hari', 10, 2);
            $table->integer('stok');
            $table->boolean('tersedia')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variasi_iphones');
    }
};
