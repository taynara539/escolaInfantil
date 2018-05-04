<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	 protected $fillable = ['nomecompleto', 'nascimento', 'foto', 'pai', 'mae', 'logradouro', 'numero', 
        'complemento', 'bairro', 'cidade', 'estado', 'pais', 'cep', 'inicio', 'telefone'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'aluno';
    
}
