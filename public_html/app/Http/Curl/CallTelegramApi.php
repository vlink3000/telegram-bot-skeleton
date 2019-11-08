<?php

declare(strict_types=1);

namespace App\Http\Curl;

class CallTelegramApi
{
    public function sendPostRequest($method, $params = [])
    {
        $config = include ($_SERVER["DOCUMENT_ROOT"] . '/app/Config/config.php');
        $baseUrl = $config['endpoint'];

        if(!empty($params)) {
            $url = $baseUrl . $method . '?' . http_build_query($params);
        } else {
            $url = $baseUrl . $method;
        }
        $ch = curl_init($url);

        //execute
        $response = curl_exec($ch);

        //close the connection
        curl_close($ch);

        return $response;
    }
}