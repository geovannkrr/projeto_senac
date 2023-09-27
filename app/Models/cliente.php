<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'cliente';
    protected $primaryKey = 'id_cliente';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nome',
        'idade',
        'cpf',
        'email',
        'telefone',
        'cep',

    ];

    /**
     * -----------------------------
     * | Relacionamentos
     * |
     * ------------------------------
     */

     public function Adocao(){
        return $this->belongsTo(
            Adocao::class,
            'id_cliente',
            'id_cliente'
        );

    }

        public function Historico_Cliente(){
        return $this->belongsTo(
            Historico_Cliente::class,
            'id_cliente',
            'id_cliente'
        );
     }

}

