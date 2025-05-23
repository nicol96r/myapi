<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'direccion',
    ];
    public function pedidos()
    {
        return $this->hasMany(pedido::class,'id_usuario');
    }
}
