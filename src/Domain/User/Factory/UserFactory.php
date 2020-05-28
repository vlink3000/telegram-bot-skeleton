<?php

namespace App\Domain\User\Factory;

use App\Application\Helpers\Validator\UserValidator;
use App\Domain\User\Entity\User;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Request;

class UserFactory
{
    /**
     * @param Request $request
     *
     * @return User
     */
    public function createFromRequest(Request $request): User
    {
        $validator = new UserValidator();
        $validatedUser = $validator->validateUserRequest($request);

        $user = new User();

        $user->setUserTelegramId($validatedUser['id']);
        $user->setUserName($validatedUser['first_name']);
        $user->setMessage($validatedUser['message']);
        $user->setLanguageCode($validatedUser['language_code']);
        $user->setLastRequestAt(Carbon::now());

        return $user;
    }
}