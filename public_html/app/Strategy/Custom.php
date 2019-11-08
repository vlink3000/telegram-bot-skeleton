<?php

declare(strict_types=1);

namespace App\Strategy;

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