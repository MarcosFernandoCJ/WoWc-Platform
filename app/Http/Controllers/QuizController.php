<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::inRandomOrder()->take(10)->get();
        return view('/quizzes/index', compact('quizzes'));   
    }

    public function check(Request $request){

        $correctAnswers = 0;

        foreach ($request->input('answerselected') as $Id => $selectedAnswer) {
            $quiz = Quiz::find($Id);
            if ($quiz->correct_answer === $selectedAnswer) {
                $correctAnswers++;
            }
        }

        $result = ($correctAnswers / 10) * 100;

        return redirect()->route('quizzes.score')->with('score', $result);
    }
    public function result()
    {
        $result = session('score');
        return view('/quizzes/score', compact('result'));
    }
}
