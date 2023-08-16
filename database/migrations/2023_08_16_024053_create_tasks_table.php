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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('descripcion');
            $table->date('deadline');
            $table->string('task_status')->default('Abierto');

            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('client_id')->nullable()->constrained();
            $table->foreignId('project_id')->nullable()->constrained();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
