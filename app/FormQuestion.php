<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormQuestion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'form_questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'question'
    ];

    /**
     * Get the files for the question.
     */
    public function files()
    {
        return $this->hasMany('App\FormFile', 'form_question_id');
    }
}
