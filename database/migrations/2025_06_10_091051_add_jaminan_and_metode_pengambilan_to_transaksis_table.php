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
    Schema::table('transaksis', function (Blueprint $table) {
        $table->string('jaminan')->after('status');
        $table->enum('metode_pengambilan', ['store', 'delivery'])->after('jaminan');
    });
}

public function down(): void
{
    Schema::table('transaksis', function (Blueprint $table) {
        $table->dropColumn(['jaminan', 'metode_pengambilan']);
    });
}

};
