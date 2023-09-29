<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\medico;
use App\Models\consultorio;

return new class extends Migration
{
    /**
     * Run the migrations.e
     */
    public function up(): void
    {
        Schema::create('tempo_livres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(medico::class);
            $table->date('data');
            $table->foreignIdFor(consultorio::class);
            $table->timestamps();
            $table->foreign('medico_id')->references('User_id')->on('medicos');
            $table->foreign('consultorio_id')->references('id')->on('consultorios');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempo_livres');
    }
};
