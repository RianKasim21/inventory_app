<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'jumlah',
        'harga_satuan',
        'user_id'
    ];

    protected $casts = [
        'harga_satuan' => 'integer',
        'jumlah' => 'integer'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getHargaFormatAttribute(): string
    {
        return 'Rp ' . number_format($this->harga_satuan, 0, ',', '.');
    }

    public function getTotalNilaiAttribute(): float
    {
        return $this->jumlah * $this->harga_satuan;
    }

    public function getTotalNilaiFormatAttribute(): string
    {
        return 'Rp ' . number_format($this->totalnilai, 0, ',', '.');
    }
}
