<?php declare(strict_types=1);

namespace App\Domain\Strategy;

use App\Domain\User\Entity\User;

class StrategyContext
{
    private $strategy;
    /**
     * StrategyContext constructor.
     * @param StrategyInterface $strategy
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }
    /**
     * @param StrategyInterface $strategy
     */
    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param User $user
     *
     * @return array
     */
    public function getResponse(User $user): array
    {
        return $this->strategy->prepareResponse($user);
    }
}