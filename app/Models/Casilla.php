<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Casilla
 * 
 * @property int $id
 * @property string $ubicacion
 * 
 * @property Collection|Funcionario[] $funcionarios
 * @property Collection|Imeiautorizado[] $imeiautorizados
 * @property Collection|Voto[] $votos
 *
 * @package App\Models
 */
class Casilla extends Model
{
	protected $table = 'casilla';
	public $timestamps = false;

	protected $fillable = [
		'ubicacion'
	];

	public function funcionarios()
	{
		return $this->belongsToMany(Funcionario::class, 'funcionariocasilla')
					->withPivot('id', 'rol_id', 'eleccion_id');
	}

	public function imeiautorizados()
	{
		return $this->hasMany(Imeiautorizado::class);
	}

	public function votos()
	{
		return $this->hasMany(Voto::class);
	}
}
