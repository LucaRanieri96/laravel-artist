<?php

namespace App\Models;

use App\Models\Label;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['artista', 'nazionalita', 'prossimo_concerto', 'ultimo_album', 'ultimo_singolo', 'label_id'];

    public function label(): BelongsTo
    {
        return $this->belongsTo(Label::class);
    }

}
