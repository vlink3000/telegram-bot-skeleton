<?php

declare(strict_types=1);

namespace Bot\Strategy;

interface StrategyInterface
{
    public function prepareResponse(array $request);
}