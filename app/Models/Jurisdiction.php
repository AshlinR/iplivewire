<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurisdiction extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $hidden = ['creator', 'created_at', 'updated_at', 'updater'];
    protected $guarded = [];


    // public function eventTypes()
    // {
    //     return $this->belongsToMany(EventType::class);
    // }
    // public function matterTypes()
    // {
    //     return $this->belongsToMany(MatterType::class);
    // }
    public function matters()
    {
        return $this->hasMany(Matter::class);
    }
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
