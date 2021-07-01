<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//tenemos una clase llamada curso con una extencion llamada model 
//los podemos mandar a llamar con un controlador 
class Curso extends Model
{
    use HasFactory;

    //protected $table = "users"; Probar si se quiere administrar la tabla users desde la convencion curso 
    //protected $fillable = ['name','descripcion','categoria'];
    protected $guarded = []; //status
    
    public function getRouteKeyName()
    {
        //return $this->getKeyName();
        return 'slug';
    }

}
