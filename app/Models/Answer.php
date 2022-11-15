<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answer',
        'question_id',
        'next_question_id',
    ];

    /**
     * Get the answer question.
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo('App\Models\Question');
    }

    /**
     * Get the answer next question.
     */
    public function nextQuestion(): BelongsTo
    {
        return $this->belongsTo('App\Models\Question', 'next_question_id');
    }
}
