<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'historico_animal';
    protected $primaryKey = 'id_historico_animal';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'tipo_historico_animal',

    ];

    /**
     * -----------------------------
     * | Relacionamentos
     * |
     * ------------------------------
     */

     public function Animal(){
        return $this->belongsTo(
            Animal::class,
            'id_animal',
            'id_animal'
        );

    }

}



