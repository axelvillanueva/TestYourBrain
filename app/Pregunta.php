<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Respuesta;

class Pregunta extends Model
{
  protected $guarded = [];

  public function categoria()
  {
    return $this->belongsTo(Categoria::class, "categoria_id");
  }

  public function respuestas()
  {
    return $this->hasMany(Respuesta::class, "pregunta_id");
  }
}
