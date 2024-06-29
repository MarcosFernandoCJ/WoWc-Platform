<?php

namespace Database\Seeders;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'question' => '¿Cuál de las siguientes cláusulas se utiliza para filtrar registros en una consulta SQL?',
            'answers' => ['SELECT', 'WHERE', 'FROM', 'JOIN'],
            'correct_answer' => 'WHERE',
        ]);

        Quiz::create([
            'question' => '¿Qué significa el acrónimo SQL?',
            'answers' => ['Structured Query Language', 'Simple Query Language ', 'System Query Logic', 'Standard Query Level
'],
            'correct_answer' => 'Structured Query Language',
        ]);
    }
}
