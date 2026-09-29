<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employee_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nip', 30)->unique();
            $table->string('unit');
            $table->string('status', 20)->default('Aktif');
            $table->timestamps();
            $table->index(['status', 'unit']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_records');
    }
};
