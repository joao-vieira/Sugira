<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model {
    
	protected $fillable = ['id', 'descricao', 'prioridade'];

}
