<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    // /**
    //  * The table associated with the model.
    //  *
    //  * @var string
    //  */
    // protected $table = 'proyectos';

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'titulo',
    //     'contenido',
    //     'users_id',
    // ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentarios::class);
    }

    public function preguntas()
    {
        return $this->hasMany(Preguntas::class);
    }    
}