<?php

declare(strict_types=1);

namespace App\Auth;

class Login
{
    public function ajaxLogin ($login, $password)
    {
        $credentials['login'] = $login;
        $credentials['password'] = $password;

        $this->checkCredentials($credentials);

        $config = include ($_SERVER["DOCUMENT_ROOT"] . '/app/Config/config.php');

        $token = $config['token'];

        if ($_SESSION['token'] == $token) {

            echo json_encode(array("authorized" => 'true'));

            return true;
        } else {

            echo json_encode(array("authorized" => 'false'));

            return false;
        }
    }

    private function checkCredentials(array $credentials)
    {
        $config = include ($_SERVER["DOCUMENT_ROOT"] . '/app/Config/config.php');

        $login = $config['admin']['login'];
        $password = $config['admin']['password'];

        $token = $config['token'];

        if ($credentials['login'] == $login && $credentials['password'] == $password) {

            session_start();
            $_SESSION['token'] = $token;

            return true;
        }
        session_start();
        $_SESSION['token'] = 'falseToken';

        return false;
    }
}