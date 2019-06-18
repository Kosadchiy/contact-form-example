<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormFile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'form_files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'src', 'form_question_id'
    ];

    /**
     * Get the question that owns the file.
     */
    public function formQuestion()
    {
        return $this->belongsTo('App\FormQuestion', 'form_question_id');
    }
}
