<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votocandidato extends Model
{
    protected $table = 'votocandidato';
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'voto_id' => 'int',
        'candidato_id' => 'int',
        'votos' => 'int'
	];

	protected $fillable = [
		'voto_id',
        'candidato_id',
        'votos'
	];
    use HasFactory;
}
