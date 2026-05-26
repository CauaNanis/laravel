<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponenteModel extends Model
{
    use HasFactory;
    protected $table = 'administrador';
    protected $fillable = ['nome', 'hora_inicio', 'hora_fim'];
}
