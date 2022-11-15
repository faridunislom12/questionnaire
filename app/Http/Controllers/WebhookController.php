<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function input(Request $request): Response
    {
        $question = Question::find($request->input('question_id'));
//        $answer = Answer::find($request->input('answer_id'));
//        $nextQuestion = $answer->nextQuestion;

        return response($question->nextQuestion);
    }
}
