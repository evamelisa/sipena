<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('laporan', function (Blueprint $table) {
            $table->string('status')->default('Baru');
            $table->text('catatan_admin')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('laporan', function (Blueprint $table) {
            $table->dropColumn(['status', 'catatan_admin']);
        });
    }
};
