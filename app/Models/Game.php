<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Game extends Model
{
    use HasFactory;
}
Schema::create('games', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('team1_id');
    $table->unsignedBigInteger('team2_id');
    $table->integer('team1_score')->nullable();
    $table->integer('team2_score')->nullable();
    $table->string('field');
    $table->unsignedBigInteger('referee_id');
    $table->timestamp('time');
    $table->timestamps();

    $table->foreign('team1_id')->references('id')->on('teams');
    $table->foreign('team2_id')->references('id')->on('teams');
    $table->foreign('referee_id')->references('id')->on('users');
});
