<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assignment_letters', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique()->nullable();
            $table->string('title');
            $table->string('employee_name');
            $table->string('employee_number', 30)->nullable();
            $table->string('unit');
            $table->string('destination');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('purpose');
            $table->string('status', 30)->default('Menunggu');
            $table->text('decision_note')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();
            $table->index(['status', 'start_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignment_letters');
    }
};
