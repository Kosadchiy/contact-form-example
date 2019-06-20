<?php

namespace App\Observers;

use \Notification;
use App\FormQuestion;
use App\Notifications\NewFormQuestion;
use App\Services\Contracts\SettingsServiceInterface;

class FormQuestionObserver
{
    protected $settingsService;

    public function __construct(SettingsServiceInterface $settingsService)
    {
        $this->settingsService = $settingsService;
    }

    /**
     * Handle the form question "created" event.
     *
     * @param  \App\FormQuestion  $formQuestion
     * @return void
     */
    public function created(FormQuestion $formQuestion)
    {
        $toEmail = $this->settingsService->get('questions_email');
        if (!$toEmail) $toEmail = 'info@molinos.com';
        Notification::route('mail', $toEmail)
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
