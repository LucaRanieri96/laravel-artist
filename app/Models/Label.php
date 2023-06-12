<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Label extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'slug'];

  
    public function artists(): HasMany
    {
        return $this->hasMany(Artist::class);
    }
}
