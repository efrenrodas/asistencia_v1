<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencium
 *
 * @property $id
 * @property $id_user
 * @property $hora
 * @property $tipo
 * @property $id_empresa
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistencium extends Model
{

    static $rules = [
		//'id_user' => 'required',
	//	'hora' => 'required',
		'tipo' => 'required',
        'latitude'=>'required',
        'longitude'=>'required',
	//	'id_empresa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user','hora','tipo','id_empresa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'id_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }


}
