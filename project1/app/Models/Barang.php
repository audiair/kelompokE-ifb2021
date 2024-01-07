<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kode',
        'nama_barang',
        'stok',
        'satuan',
        'harga_satuan',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
