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
        Schema::create('struktur', function (Blueprint $table) {
            $table->id();
            $table->string('Nama1');
            $table->string('Nama2');
            $table->string('Nama3');
            $table->string('Nama4');
            $table->string('Nama5');
            $table->string('Nama6');
            $table->string('jabatan1');
            $table->string('jabatan2');
            $table->string('jabatan3');
            $table->string('jabatan4');
            $table->string('jabatan5');
            $table->string('jabatan6');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
            $table->string('img6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struktur');
    }
};
