<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    use HasFactory;

    protected $fillable = ['cat_nombre', 'cat_descripcion', 'cat_status', 'cat_empresa_id'];

    protected $hidden = ['created_at', 'updated_at'];

    public function producto() {
        return $this->hasMany(ProductoModel::class, 'prod_cat_id', 'id');
    }
}
