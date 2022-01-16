<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $Nombre
 * @property $Ruc
 * @property $Correo
 * @property $id_user
 * @property $longtud
 * @property $logintud
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Ruc' => 'required',
		'Correo' => 'required',
		//'id_user' => 'required',
		'latitud' => 'required',
		'longitud' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Ruc','Correo','id_user','latitud','longitud'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    

}
