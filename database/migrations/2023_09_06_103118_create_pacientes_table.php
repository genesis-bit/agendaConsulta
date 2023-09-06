<?php

use App\Models\genero;
use App\Models\User;
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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->string('identificacao',50)->unique();
            $table->year('ano_nascimento');
            $table->foreignIdFor(genero::class);
            $table->bigInteger('telefone');
            $table->timestamps();
            $table->primary('User_id');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
