<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("pessoa_juridica", function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->string("nome_fantasia", 100);
            $table->string("cnpj", 14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pessoa_juridica");
    }
};
