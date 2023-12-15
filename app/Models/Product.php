<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Menggunakan trait HasFactory untuk memfasilitasi pembuatan model
    use HasFactory;

    // Nama tabel di database yang terkait dengan model ini
    protected $table = 'product';

    // Kolom-kolom yang dapat diisi (fillable) ketika membuat atau memperbarui model
    protected $fillable = [
        'product',
        'price',
        'stock',
    ];
}
