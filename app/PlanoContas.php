<?php

namespace finance;

use Illuminate\Database\Eloquent\Model;

class PlanoContas extends Model
{
    protected $fillable = [
        'codigo','nome', 'descricao'
    ];
    
    protected $guarded = [
        'id','created_at','updated_at'
        ];
    
    protected $table = 'plano_contas';
}
