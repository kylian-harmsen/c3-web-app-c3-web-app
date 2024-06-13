<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Goal extends Model
{
    use HasFactory;
}
Schema::create('goals', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('player_id');
    $table->unsignedBigInteger('match_id');
    $table->datetime('time');
    $table->timestamps();

    $table->foreign('player_id')->references('id')->on('users');
    $table->foreign('match_id')->references('id')->on('games');
});
