<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewFormQuestion extends Notification
{
    use Queueable;

    protected $formQuestion;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($formQuestion)
    {
        $this->formQuestion = $formQuestion;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New question on site.')
                    ->line('Someone left a question:')
                    ->line($this->formQuestion->question)
                    ->action('View', config('app.url').'/admin/questions/'.$this->formQuestion->id);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
