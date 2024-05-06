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
        Schema::create('Layanan', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->string('Card1');
            $table->string('Card2');
            $table->string('Card3');
            $table->string('Card4');
            $table->string('Card5');
            $table->string('Card6');
            $table->string('Card7');
            $table->string('Card8');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
            $table->string('img6');
            $table->string('img7');
            $table->string('img8');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Layanan');
    }
};
