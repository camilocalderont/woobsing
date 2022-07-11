<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Rol extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
    ]; 

    public function usuarios() :HasMany
    {    
        return $this->hasMany(config('modelos.usuario'), 'idRol','id');   
    } 
    
    public function permisos() : BelongsToMany
    {
        return $this->belongsToMany(config('modelos.permiso'), 'rol_permisos', 'idRol','idPermiso'); 
    }     
    
}
