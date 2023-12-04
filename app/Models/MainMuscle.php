<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MainMuscle extends Model
{
    use HasFactory;

    protected $filable = [ 
        'name', 
        'description'
    ];
    
    public function exercices(): HasMany
    {
        return $this->hasMany(Exercice::class);
    }

}
