<?php

declare(strict_types=1);

require_once ('classes.php');

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
