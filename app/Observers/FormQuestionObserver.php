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

    /**
     * Handle the form question "updated" event.
     *
     * @param  \App\FormQuestion  $formQuestion
     * @return void
     */
    public function updated(FormQuestion $formQuestion)
    {
        //
    }

    /**
     * Handle the form question "deleted" event.
     *
     * @param  \App\FormQuestion  $formQuestion
     * @return void
     */
    public function deleted(FormQuestion $formQuestion)
    {
        //
    }

    /**
     * Handle the form question "restored" event.
     *
     * @param  \App\FormQuestion  $formQuestion
     * @return void
     */
    public function restored(FormQuestion $formQuestion)
    {
        //
    }

    /**
     * Handle the form question "force deleted" event.
     *
     * @param  \App\FormQuestion  $formQuestion
     * @return void
     */
    public function forceDeleted(FormQuestion $formQuestion)
    {
        //
    }
}
