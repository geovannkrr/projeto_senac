<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'animal';
    protected $primaryKey = 'id_animal';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nome',
        'tipo',
        'idade',
        'sexo',
        'cor',
        'vacinacao',
        'castracao',
        'descricao',
        'situacao',
        'vacina'
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
            'id_animal',
            'id_animal'
        );

    }

        public function Historico_Animal(){
        return $this->belongsTo(
            Historico_Animal::class,
            'id_animal',
            'id_animal'
        );
     }

        public function Raca(){
        return $this->belongsTo(
            Raca::class,
            'id_animal',
            'id_animal'
        );
     }

        public function Tipos(){
        return $this->belongsTo(
            Tipos::class,
            'id_animal',
            'id_animal'
        );
     }

     public function Porte(){
        return $this->belongsTo(
            Porte::class,
            'id_animal',
            'id_animal'
        );
     }

     public function Sexos(){
        return $this->belongsTo(
            Sexos::class,
            'id_animal',
            'id_animal'
        );
     }
}

