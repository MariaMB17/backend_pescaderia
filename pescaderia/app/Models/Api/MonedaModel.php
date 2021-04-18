<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonedaModel extends Model
{
    use HasFactory;
    protected $table = 'moneda';
    protected $fillable = [
        'id',
        'moneda_nombre',
        'moneda_descripcion',
        'moneda_simbolo',
        'moneda_abrev',
        'moneda_status',
        'empresa_id'
    ];
    protected $hidden = ['created_at','updated_at'];
    public function Empresa() {
        return $this->belongsTo(EmpresaModel::class, 'id', 'empresa_id');
    }
}
