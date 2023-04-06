<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
    ];

    public function sauce(): HasMany
    {
        return $this->hasMany(sauce::class);
    }
}
