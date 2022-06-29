<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramLocation;
use Illuminate\Notifications\Notification;

class CreditNew extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }


    public function toTelegram($request)
    {
        return TelegramMessage::create()

            ->content("Зарегестрирован новый пользователь! \n Логин: ** \n");
    }

    public function toArray($notifiable)
     {
         return [
             //
         ];
     }

}
