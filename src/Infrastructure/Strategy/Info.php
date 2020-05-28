<?php declare(strict_types=1);

namespace App\Infrastructure\Strategy;

use App\Domain\Strategy\StrategyInterface;
use App\Domain\User\Entity\User;

class Info implements StrategyInterface {

    /**
     * @param User $user
     *
     * @return array
     */
    public function prepareResponse(User $user): array{

        return [
            'params' => [
                'chat_id' => $user->getUserTelegramId(),
                'text' => 'Info response',
            ],
            'method' => [
                'sendMessage'
            ]
        ];
    }
}