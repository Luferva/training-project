<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exercice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'guide_link'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function mainMuscle(): BelongsTo
    {
        return $this->belongsTo(MainMuscle::class);
    }
}
