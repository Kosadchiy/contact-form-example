<?php

namespace App\Observers;

use \Notification;
use App\FormAnswer;
use App\Notifications\NewFormAnswer;

class FormAnswerObserver
{
    /**
     * Handle the form answer "created" event.
     *
     * @param  \App\FormAnswer  $formAnswer
     * @return void
     */
    public function created(FormAnswer $formAnswer)
    {
        $toMail = $formAnswer->formQuestion->email;
        Notification::route('mail', $toMail)
            ->notify(new NewFormAnswer($formAnswer));
    }
}
