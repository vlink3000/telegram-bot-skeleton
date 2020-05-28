<?php

namespace App\Application\Controller;

use App\Domain\Factory\StrategyFactory;
use App\Infrastructure\Connector\DatabaseConnector;
use App\Infrastructure\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class ApiController
{
    /**
     * @param Request $request
     *
     * @return void
     */
    public function save(Request $request): void
    {
        $factory = new StrategyFactory();
        $response = $factory->chooseStrategy($request);

        var_dump($response);die();

//        //send response message to user
//        $curl = new CallTelegramApi();
//        $curl->sendPostRequest($response['method'][0], $response['params']);
    }


    /**
     * @return UserRepository
     */
    private function getRepository(): UserRepository
    {
        $databaseConnector = new DatabaseConnector();

        return new UserRepository($databaseConnector);
    }
}