<?php

declare(strict_types=1);

interface StrategyInterface
{
    public function prepareResponse(array $request);
}