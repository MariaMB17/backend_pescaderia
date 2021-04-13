<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;
    protected $table = 'empresa';
    protected $fillable = [
        'id',
        'empresa_name',
        'empresa_direccion',
        'empresa_telefono',
        'empresa_correo',
        'empresa_descripcion'
    ];
    protected $hidden = ['created_at','updated_at'];
    public function sucursales() {
        return $this->hasMany(Sucursal::class, 'empresa_id');
    }
}
