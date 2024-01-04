<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cabang extends Model
{
    use HasFactory;

    public function manajer(): BelongsTo{
        return $this->belongsTo(Manajer::class);
    }
}
