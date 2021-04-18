<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraModel extends Model
{
    use HasFactory;
    protected $table = 'compra';
    protected $fillable = [
        'id',
        'compra_fecha',
        'proveedor_id',
        'compra_exento',
        'compra_almacen',
        'empresa_id'
    ];
    protected $hidden = ['created_at','updated_at'];
    public function Empresa() {
        return $this->belongsTo(EmpresaModel::class, 'id');
    }

    public function proveedor() {
        return $this->belongsTo(ProveedorModel::class, 'id', 'proveedor_id');
    }

    public function CompraDetalles() {
        return $this->hasMany(CompraDetalleModel::class, 'compra_id', 'id');
    }
}
