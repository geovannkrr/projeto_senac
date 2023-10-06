<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipos extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tipos';
    protected $primaryKey = 'id_tipos';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'tipo',

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



