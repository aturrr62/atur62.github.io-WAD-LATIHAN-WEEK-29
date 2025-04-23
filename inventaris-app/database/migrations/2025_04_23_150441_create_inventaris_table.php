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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id(); // Primary key column
            $table->string('nama_barang'); // Column for item name
            $table->integer('jumlah'); // Column for quantity
            $table->string('lokasi'); // Column for location
            $table->timestamps(); // Automatically adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris'); // Drops the table if the migration is rolled back
    }
};