<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Tecnico extends Model implements Authenticatable
{
    use HasFactory, Notifiable, AuthenticatableTrait;

    // Definindo a tabela que este modelo usa
    protected $table = 'tecnicos';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome', 'email', 'password', 'telemovel', 'especialidade',
    ];

    // Campos a serem escondidos (como a senha)
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Conversão de tipos para campos
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relacionamentos
    // Um técnico pode pertencer a muitos serviços
    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'servico_tecnico');
    }

    // Você pode adicionar outros relacionamentos aqui, se necessário.
}
