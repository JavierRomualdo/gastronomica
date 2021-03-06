<?php

namespace App\Models\Proveedores;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'Proveedor';
    protected $primarykey = 'id';
    public $timestamps=false;

    protected $fillable = [
      'id', 'empresa', 'ruc', 'direccion', 'telefono',
      'correo', 'fecha_ingreso', 'descripcion', 'estado'
    ];

    /*public function Productos()
    {
      # code...
      return $this->belongsto(Productos::class);
    }

    public function NumeroCuenta()
    {
      # code...
      return $this->belongsto(NumeroCuenta::class);
    }*/
}
