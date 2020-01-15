<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class Helper {
    public static function getRSRequest(string $route, $output="json")
    {
        $client = new Client();
        $request = $client->get('https://apilearnbase.herokuapp.com/'.$route);
        $response = $request->getBody()->getContents();
        $project = json_decode($response);
        return $project;
    }

    // function postRSRequest(string $route, $body)
    // {
    //     $client = new \GuzzleHttp\Client();
    //     $response = $client->post('https://api-recruitskill.herokuapp.com/'.$route, ['body'=>$body]);
    //     $response = $client->send($response);
    //     echo '<pre>';
    //     print_r($response);
    //     exit;
    // }

}
