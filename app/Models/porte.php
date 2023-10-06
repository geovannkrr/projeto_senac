<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class porte extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'porte';
    protected $primaryKey = 'id_porte';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'tipo_porte',

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



