<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';

    protected $fillable = [
        'descripcion', 
        'costo_compra_divisa', 
        'costo_compra_bs',
        'costo_venta_divisa',
        'costo_venta_bs',
    ];
    protected $hidden = ['created_at','updated_at'];
}
