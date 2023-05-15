<?php

namespace App\Models;

use App\Models\Player;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'scoreEvent'
    ];

    public function players(){
        return $this->belongsToMany(Player::class);
    }
}
