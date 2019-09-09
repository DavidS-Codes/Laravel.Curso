<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu"; //tabla a la que accedera
    protected $fillable = ['nombre', 'url', 'icono']; //campos que se enviaran en la vista , mayor seguridad no acepta mas
    protected $guarded = ['id']; //datos no modificables en el envio del post
}
