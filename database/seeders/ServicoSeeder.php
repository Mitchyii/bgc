<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicos')->insert(
            [
                'tipo' => 'Bruno Cerqueira',
                'dataInicio' => 'bruno@empresa.com',
                'conclusaoExpectada' => bcrypt('12345678'), // Encriptação da senha
                'conclusao' => '912345678',
                'estado' => 'computador',
                'descricao' => 'computador',
            ],
            [
                'nome' => 'Maria Souza',
                'email' => 'maria@empresa.com',
                'password' => bcrypt('senha_secreta'),
                'telemovel' => '917654321',
                'especialidade' => 'armazenamento',
            ]
        );
    }
}
