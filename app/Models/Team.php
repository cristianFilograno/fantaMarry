<?php

namespace App\Models;

use App\Models\User;
use App\Models\Player;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'scoreTeam'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function players(){
        return $this->belongsToMany(Player::class);
    }
}
