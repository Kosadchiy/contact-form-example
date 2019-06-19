<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormAnswer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'form_answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'form_question_id'
    ];

    /**
     * Get the question that owns the file.
     */
    public function formQuestion()
    {
        return $this->belongsTo('App\FormQuestion', 'form_question_id');
    }
}
