<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mibases', function (Blueprint $table) {
            $table->id();
            $table->string('imagen',100);
            $table->string('nombre',30);
            $table->string('descripcion', 200);
            $table->timestamps();
        });

        // DB::statement("ALTER TABLE mibases ADD imagen MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mibases');
    }
};
