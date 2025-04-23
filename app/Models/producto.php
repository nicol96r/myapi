<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $fillable = [
    'nombre',
    'descripcion',
    'precio',
    'cantidad',
    'estado'
    ];
    public function pedidos()
    {
        return $this ->hasMany(Pedido::class, 'id_producto');
    }
}
