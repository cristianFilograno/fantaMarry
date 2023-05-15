<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'score',
    ];

    public function teams(){
        return $this->belongsToMany(Team::class);
    }

    public function events(){
        return $this->belongsToMany(Event::class);
    }
}
