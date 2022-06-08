<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    
    public function proyecto()
    {
        return $this->belongsTo(Proyectos::class);
    }

    public function articulo()
    {
        return $this->belongsTo(Articulos::class);
    }
}