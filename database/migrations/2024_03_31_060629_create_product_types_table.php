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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->string('product_type_name')->nullable();
            $table->timestamps();
        });
        DB::table('product_types')->insert([
            ['product_type_name' => 'Single'],
            ['product_type_name' => 'Unit'],
            ['product_type_name' => 'Boxed'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
