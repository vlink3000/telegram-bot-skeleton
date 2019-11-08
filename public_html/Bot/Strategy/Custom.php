<?php

declare(strict_types=1);

namespace Bot\Strategy;

class Custom implements StrategyInterface {

    public function prepareResponse(array $request) {

        return [
            'params' => [
                'chat_id' => $request['message']['chat']['id'],
                'text' => 'Custom response',
            ],
            'method' => [
                'sendMessage'
            ]
        ];
    }
}