<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permiso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(config('modelos.rol'), 'rol_permisos', 'idPermiso','idRol'); 
    }      
}
