<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'survey_id',
        'next_question_id',
    ];

    /**
     * Get the question survey.
     */
    public function survey(): BelongsTo
    {
        return $this->belongsTo('App\Models\Survey');
    }

    /**
     * Get the question next question.
     */
    public function nextQuestion(): BelongsTo
    {
        return $this->belongsTo('App\Models\Question', 'next_question_id');
    }

    /**
     * Get the question answers.
     */
    public function answers(): HasMany
    {
        return $this->hasMany('App\Models\Answer');
    }
}
