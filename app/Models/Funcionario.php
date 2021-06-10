<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Funcionario
 * 
 * @property int $id
 * @property string $nombrecompleto
 * @property string|null $sexo
 * 
 * @property Collection|Eleccioncomite[] $eleccioncomites
 * @property Collection|Casilla[] $casillas
 * @property Collection|Imeiautorizado[] $imeiautorizados
 *
 * @package App\Models
 */
class Funcionario extends Model
{
	protected $table = 'funcionario';
	public $timestamps = false;

	protected $fillable = [
		'nombrecompleto',
		'sexo'
	];

	public function eleccioncomites()
	{
		return $this->hasMany(Eleccioncomite::class);
	}

	public function casillas()
	{
		return $this->belongsToMany(Casilla::class, 'funcionariocasilla')
					->withPivot('id', 'rol_id', 'eleccion_id');
	}

	public function imeiautorizados()
	{
		return $this->hasMany(Imeiautorizado::class);
	}
}
