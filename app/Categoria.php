<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pregunta;


class Categoria extends Model
{
  protected $guarded = [];

  public function preguntas()
  {
    return $this->hasMany(Pregunta::class, "categoria_id");
  }
}
