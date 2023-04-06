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
        Schema::disableForeignKeyConstraints(); // On désactive les contraintes de clés étrangères pour éviter les erreurs
        Schema::create('sauces', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->foreignId('userID')->references('id')->on('utilisateurs')->constrained()->onDelete('cascade'); // On ajoute la clé étrangère
            $table->string('name');
            $table->string('manufacturer');
            $table->string('description');
            $table->string('mainPepper');
            $table->string('imgURL');
            $table->integer('heat');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->json('usersWhoLiked');
            $table->json('usersWhoDisliked');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sauces');
    }
};
