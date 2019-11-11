<?php

declare(strict_types=1);

require_once ('autoload.php');

use App\Factory\StrategyFactory;
use App\Http\Curl\CallTelegramApi;
use App\Auth\Login;

if (isset($_POST['isLogin'])) {

    $auth = new Login();
    $auth->ajaxLogin($_POST['login'], $_POST['password']);

    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: https://skeleton-telegram-bot.000webhostapp.com/admin/auth');
} else {
    //get response from telegram api
    $request = json_decode(file_get_contents('php://input'), true);

    //save logs, info about  latest conversation
    file_put_contents( 'bot_logs.txt', file_get_contents('php://input'));

    //chose response strategy
    $factory = new StrategyFactory();
    $response = $factory->chooseStrategy($request);

    //send response message to user
    $curl = new CallTelegramApi();
    $curl->sendPostRequest($response['method'][0], $response['params']);
}
