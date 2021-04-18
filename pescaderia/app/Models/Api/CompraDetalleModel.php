<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraDetalleModel extends Model
{
    use HasFactory;
    protected $table = 'compra_detalle';
    protected $fillable = [
        'id',
        'compra_id',
        'producto_id',
        'comprad_cantidad',
        'comprad_preciolista',
        'comprad_impuesto',
        'comprad_descuento',
        'comprad_preciofinal',
        'comprad_total',
        'empresa_id'
    ];
    protected $hidden = ['created_at','updated_at'];
    public function Empresa() {
        return $this->belongsTo(EmpresaModel::class, 'id', 'empresa_id');
    }

    public function Compra() {
        return $this->belongsTo(CompraModel::class, 'id', 'compra_id');
    }

    public function Producto() {
        return $this->belongsTo(ProductoModel::class, 'id', 'producto_id');
    }



}
