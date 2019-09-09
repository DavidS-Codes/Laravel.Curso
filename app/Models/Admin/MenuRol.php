<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuRol extends Model
{
    protected $table = "menu_rol"; //Tabla a la que accedera el modelo
    public $timestamp = false; //Dado el caso de que no exita el  campo 'timestamp' en la BD
}
