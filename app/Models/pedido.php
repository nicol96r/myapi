<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_producto',
        'id_usuario'
    ];
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
