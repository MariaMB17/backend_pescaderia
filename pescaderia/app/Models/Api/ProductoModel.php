<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    use HasFactory;

    protected $fillable = [ 
                  'prod_desc_corta', 'prod_des_larga','prod_tipo_id', 
                  'prod_cat_id', 'prod_minstock', 'prod_maxstock',
                  'prod_path_img', 'prod_status', 'prod_empresa_id'
                ];

    protected $hidden = ['created_at', 'updated_at'];

    public function categoria() {
        return $this->belongsTo(CategoriaModel::class,'id','prod_cat_id');
    }

    public function tipoProducto() {
        return $this->belongsTo(TipoProductoModel::class,'id','prod_cat_id');
    }
}
