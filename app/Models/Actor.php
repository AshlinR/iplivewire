<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $hidden = ['login', 'last_login', 'password', 'remember_token', 'creator', 'created_at', 'updated_at', 'updater'];
    protected $guarded = ['id', 'password', 'created_at', 'updated_at'];

    // Relations
    // public function matters()
    // {
    //     return $this->belongsToMany(Matter::class)->withTimestamps();
    // }
    // public function documents()
    // {
    //     return $this->belongsToMany(Document::class);
    // }
    // public function jurisdictions()
    // {
    //     return $this->belongsToMany(Jurisdiction::class);
    // }
    // public function classifiers()
    // {
    //     return $this->hasMany(Classifier::class);
    // }
}
