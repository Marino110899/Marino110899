<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $id
 * @property string $descripcion
 * 
 * @property Collection|Eleccioncomite[] $eleccioncomites
 * @property Collection|Funcionariocasilla[] $funcionariocasillas
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function eleccioncomites()
	{
		return $this->hasMany(Eleccioncomite::class);
	}

	public function funcionariocasillas()
	{
		return $this->hasMany(Funcionariocasilla::class);
	}
}
