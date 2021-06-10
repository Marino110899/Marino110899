<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Eleccioncomite
 * 
 * @property int $id
 * @property int|null $eleccion_id
 * @property int|null $funcionario_id
 * @property int|null $rol_id
 * 
 * @property Eleccion|null $eleccion
 * @property Funcionario|null $funcionario
 * @property Rol|null $rol
 *
 * @package App\Models
 */
class Eleccioncomite extends Model
{
	protected $table = 'eleccioncomite';
	public $timestamps = false;

	protected $casts = [
		'eleccion_id' => 'int',
		'funcionario_id' => 'int',
		'rol_id' => 'int'
	];

	protected $fillable = [
		'eleccion_id',
		'funcionario_id',
		'rol_id'
	];

	public function eleccion()
	{
		return $this->belongsTo(Eleccion::class);
	}

	public function funcionario()
	{
		return $this->belongsTo(Funcionario::class);
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class);
	}
}
