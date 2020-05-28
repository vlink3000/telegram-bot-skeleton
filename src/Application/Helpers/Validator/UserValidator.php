<?php

namespace App\Application\Helpers\Validator;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Exception\InvalidArgumentException;

class UserValidator implements UserValidatorInterface
{
    /***
     * @param Request $request
     *
     * @return array
     */
    public function validateUserRequest(Request $request): array
    {
        $keys = [
            'id',
            'first_name',
            'message',
            'language_code'
        ];

        try{
            $userData = $this->toArray($request);
        } catch (InvalidArgumentException $exception){
            die($exception->getMessage());
        }

        foreach ($keys as $key) {
            if (!array_key_exists($key, $userData)) {
                $userData[$key] = "";
            }
        }

        return $userData;
    }

    /**
     * @param Request $request
     *
     * @throws InvalidArgumentException
     * @return array
     */
    private function toArray (Request $request): array
    {
        $request = json_decode($request->getContent(), true);

        if(isset($request['message']['from']) && isset($request['message']['text'])) {

            $message['message'] = $request['message']['text'];

            return array_merge($request['message']['from'], $message);
        }

        throw new InvalidArgumentException('Invalid structure of user message.');
    }
}