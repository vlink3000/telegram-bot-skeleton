<?php

namespace App\Application\Helpers\Router\Routes;

use App\Application\Controller\ApiController;
use Symfony\Component\HttpFoundation\Request;

class ApiRoutes
{
    public function handleRoute(Request $request)
    {
        $apiController = new ApiController();

        switch ($request->getPathInfo()) {
            case '/api/v1/telegram':
                $apiController->save($request);
                break;
            case '/api/v1/notifier':
//                $apiController->notifier($request);
                break;
            case '/api/v1/truncate':
//                $apiController->truncate();
                break;
            default:
                break;
        }
    }
}