<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moneda extends Model
{
    use HasFactory;
    protected $table = 'moneda';
    protected $fillable = [
        'id',
        'moneda_nombre',
        'moneda_descripcion',
        'moneda_simbolo',
        'moneda_abrev',
        'moneda_status'
    ];
    protected $hidden = ['created_at','updated_at'];
}
