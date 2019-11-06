<?php

declare(strict_types=1);

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