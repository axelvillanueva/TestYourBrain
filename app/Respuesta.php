<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pregunta;


class Respuesta extends Model
{
  protected $guarded = [];

  public function pregunta()
  {
    return $this->belongsTo(Pregunta::class, "pregunta_id");
  }

}
