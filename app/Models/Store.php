<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'logo', 'description'];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function vinyls(): HasMany
    {
        return $this->hasMany(Vinyl::class);
    }
}
