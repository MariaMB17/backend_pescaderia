<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
    use HasFactory;
    protected $table = 'sucursal';
    protected $fillable = [
        'id',
        'sucursal_name',
        'sucursal_descripcion',
        'sucursal_direccion',
        'sucursal_telefono',
        'sucursal_correo',
        'empresa_id'
    ];
    protected $hidden = ['created_at','updated_at'];
    public function Empresa() {
        return $this->belongsTo(Empresa::class, 'id');
    }
}
