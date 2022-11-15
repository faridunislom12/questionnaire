<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;

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
        Answer::create([
            'answer' => $request->input('answer'),
            'question_id' => $request->input('question_id'),
            'next_question_id' => $request->input('next_question_id'),
        ]);

        return response(Question::find($request->input('next_question_id')));
    }
}
