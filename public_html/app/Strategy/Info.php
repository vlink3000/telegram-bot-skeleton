<?php

declare(strict_types=1);

namespace App\Strategy;

class Info implements StrategyInterface {

    public function prepareResponse(array $request) {

        return [
            'params' => [
                'chat_id' => $request['message']['chat']['id'],
                'text' => 'Info response',
            ],
            'method' => [
                'sendMessage'
            ]
        ];
    }
}