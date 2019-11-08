<?php

declare(strict_types=1);

namespace Bot\Strategy;

class Start implements StrategyInterface {

    public function prepareResponse(array $request)
    {
        return [
            'params' => [
                'chat_id' => $request['message']['chat']['id'],
                'text' => 'Well, let\'s get started'
            ],
            'method' => [
                'sendMessage'
            ]
        ];
    }
}