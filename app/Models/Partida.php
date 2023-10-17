<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $fillable = ['data', 'horario_inicio', 'horario_termino', 'time_casa', 'time_visitante', 'gols_time_casa', 'gols_time_visitante'];
}
