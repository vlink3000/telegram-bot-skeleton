<?php

namespace App\Application\Helpers\Validator;

use Symfony\Component\HttpFoundation\Request;

interface UserValidatorInterface
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function validateUserRequest(Request $request): array;
}