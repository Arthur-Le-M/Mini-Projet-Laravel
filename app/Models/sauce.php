<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class sauce extends Model
{
    use HasFactory;

    protected $fillable=[
        'userID',
        'name',
        'manufacturer',
        'description',
        'mainPepper',
        'imgURL',
        'heat',
    ];

    protected $attributes=[
        'likes' => 0,
        'dislikes' => 0,
    ];

    public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(utilisateur::class);
    }
}
