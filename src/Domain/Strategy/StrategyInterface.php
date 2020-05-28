<?php declare(strict_types=1);

namespace App\Domain\Strategy;

use App\Domain\User\Entity\User;

interface StrategyInterface
{
    /**
     * @param User $user
     *
     * @return array
     */
    public function prepareResponse(User $user): array;
}