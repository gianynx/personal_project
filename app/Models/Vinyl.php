<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vinyl extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'image', 'year', 'store_id'];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
