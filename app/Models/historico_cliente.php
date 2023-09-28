<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'historico_cliente';
    protected $primaryKey = 'id_historico_cliente';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'data_adocao'
    ];

    protected $fillable = [
        'qtde_animais',
        'tipo_animal',
        'raca_animal',
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

}



