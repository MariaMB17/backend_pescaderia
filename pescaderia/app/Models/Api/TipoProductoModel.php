<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProductoModel extends Model
{
    use HasFactory;

    protected $fillable = ['tipop_nombre', 'tipop_descripcion', 'tipop_status', 'tipop_empresa_id'];

    protected $hidden = ['created_at', 'updated_at'];
}
