<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProveedorModel extends Model
{
    use HasFactory;
    protected $table = 'sucursal';
    protected $fillable = [
        'id',
        'prov_name',
        'prov_description',
        'prov_direccion',
        'prov_telefono',
        'prov_correo',
        'prov_tipo',
        'prov_status',
        'empresa_id'
    ];
    protected $hidden = ['created_at','updated_at'];
    public function Empresa() {
        return $this->belongsTo(Empresa::class, 'id', 'empresa_id');
    }

    public function Compras() {
        return $this->hasMany(CompraModel::class, 'proveedor_id', 'id');
    }
}
