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
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->enum('status',['Prestado','Devuelto'])->default('Prestado');
            $table->date('loan_date');
            $table->date('return_date')->nullable();
            $table->string('activity')->nullable();
            $table->foreignId('classroom_id')->constrained()->onDelete('cascade');
            $table->string('observations')->nullable();
            $table->foreignId('User_id')->constrained()->onDelete('cascade');
            $table->foreignId('User_id_return')->nullable()->constrained()->onDelete('cascade');
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
