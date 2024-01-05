<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_masuk' ,
        'cabang_id' ,
        'id_staff_gudang',
        'kode_barang',
        'jumlah',
        'harga_beli',
    ];
  
    public function barang(): BelongsTo{
        return $this->belongsTo(Barang::class, 'kode_barang');
    }

    public function staff_gudang(): BelongsTo{
        return $this->belongsTo(StaffGudang::class, 'id_staff_gudang');
    }

    public function cabang(): BelongsTo{
        return $this->belongsTo(Cabang::class, 'cabang_id');
    }
}
