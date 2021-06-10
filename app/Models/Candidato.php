<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Candidato
 * 
 * @property int $id
 * @property string $nombrecompleto
 * @property string|null $foto
 * @property string|null $sexo
 * @property string|null $perfil
 * 
 * @property Collection|Voto[] $votos
 *
 * @package App\Models
 */
class Candidato extends Model
{
	protected $table = 'candidato';
	public $timestamps = false;

	protected $fillable = [
		'nombrecompleto',
		'foto',
		'sexo',
		'perfil'
	];

	public function votos()
	{
		return $this->belongsToMany(Voto::class, 'votocandidato')
					->withPivot('votos');
	}
}
