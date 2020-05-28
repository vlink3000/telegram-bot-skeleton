<?php declare(strict_types=1);

namespace App\Domain\Factory;

use App\Domain\Strategy\StrategyContext;
use App\Domain\User\Factory\UserFactory;
use App\Infrastructure\Strategy\Custom;
use App\Infrastructure\Strategy\Info;
use App\Infrastructure\Strategy\Start;
use Symfony\Component\HttpFoundation\Request;

class StrategyFactory
{
    public function chooseStrategy(Request $request)
    {

        $userFactory = new UserFactory();
        $user = $userFactory->createFromRequest($request);

        $context = new StrategyContext(new Start());

        switch ($user->getMessage()) {
            case '/start':
                return $context->getResponse($user);
                break;
            case '/info':
                $context->setStrategy(new Info());
                return $context->getResponse($user);
                break;
            default:
                $context->setStrategy(new Custom());
                return $context->getResponse($user);
        }
    }
}