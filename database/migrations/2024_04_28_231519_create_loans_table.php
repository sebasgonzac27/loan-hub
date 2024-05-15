<?php

use App\Models\Campus;
use App\Models\Classroom;
use App\Models\Client;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Device;
use App\Models\Program;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Program::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Client::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete();
            $table->enum('status',['reserved', 'in_course', 'finished', 'in_debt'])->default('in_course');
            $table->timestamp('loan_date')->default(now());
            $table->timestamp('expected_return_date')->default(now()->addDays(7));
            $table->timestamp('return_date')->nullable();
            $table->string('activity');
            $table->text('observations')->nullable();
            $table->foreignIdFor(User::class, 'loaned_by')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'received_by')->nullable()->constrained('users')->cascadeOnDelete();
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
