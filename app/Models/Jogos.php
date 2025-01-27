<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    use HasFactory;

    protected $primaryKey = "idJogo";
    protected $fillable = [
        'nomeJogo',
        'anoJogo',
        'criadorJogo',
        'medalhasJogo',
    ];
}
