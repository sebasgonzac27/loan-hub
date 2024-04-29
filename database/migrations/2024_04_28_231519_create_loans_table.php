<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Device;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('program_id')->constrained()->cascadeOnDelete();
            $table->enum('status',['Prestado','Devuelto'])->default('Prestado');
            $table->date('loan_date');
            $table->date('return_date')->nullable();
            $table->string('activity')->nullable();
            $table->foreignId('classroom_id')->constrained()->cascadeOnDelete();
            $table->text('observations')->nullable();
            $table->foreignId('User_id')->constrained()->cascadeOnDelete();
            $table->foreignId('User_id_return')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
