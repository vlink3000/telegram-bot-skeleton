<?php

declare(strict_types=1);

namespace Bot\Factory;

use Bot\Context\StrategyContext;
use Bot\Strategy\Start;
use Bot\Strategy\Info;
use Bot\Strategy\Custom;

class StrategyFactory
{
    public function chooseStrategy($request)
    {
        $message = $request['message']['text'];

        //set up some default strategy
        $context = new StrategyContext(new Start());

        switch ($message) {
            case '/start':
                return $context->getResponse($request);
                break;
            case '/info':
                $context->setStrategy(new Info());
                return $context->getResponse($request);
                break;
            default:
                $context->setStrategy(new Custom());
                return $context->getResponse($request);
        }
    }
}