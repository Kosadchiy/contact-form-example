<?php

namespace App\Observers;

use \Notification;
use App\FormQuestion;
use App\Notifications\NewFormQuestion;

class FormQuestionObserver
{
    /**
     * Handle the form question "created" event.
     *
     * @param  \App\FormQuestion  $formQuestion
     * @return void
     */
    public function created(FormQuestion $formQuestion)
    {
        Notification::route('mail', 'kosadchij@inbox.ru')
            ->notify(new NewFormQuestion($formQuestion));
    }

    public function deleting(FormQuestion $formQuestion)
    {
        $formQuestion->answer->delete();
        foreach($formQuestion->files as $file)
        {
            $file->delete();
        }
    }
}
