<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'titulo', 
        'descripcion',
        'imagen',
        'user_id',
        'WhatsApp_Number'
    ];

    public function candidatos()
    {
        return $this->hasMany(Candidato::class)->orderBy('updated_at', 'DESC');
    }

    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
