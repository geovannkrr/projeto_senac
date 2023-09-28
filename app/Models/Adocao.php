<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'adocao';
    protected $primaryKey = 'id_adocao';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'num_pedido',
        'endereco_cliente',
        'porte_animal',
        'cor_animal',
        'raca_animal',
        'cep_cliente',
        'tipo_animal',

    ];

    /**
     * -----------------------------
     * | Relacionamentos
     * |
     * ------------------------------
     */

     public function Cliente(){
        return $this->belongsTo(
            Cliente::class,
            'id_cliente',
            'id_cliente'
        );
      }
      public function Animal(){
        return $this->belongsTo(
            Animal::class,
            'id_animal',
            'id_animal'
        );
      }
      public function Historico_Adocao(){
        return $this->belongsTo(
            Historico_Adocao::class,
            'id_adocao',
            'id_adocao'
        );
      }
}