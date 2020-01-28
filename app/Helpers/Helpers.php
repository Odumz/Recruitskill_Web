<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Stream;

class Helper {
    public static function getRSRequest(string $route, $output="json")
    {
        try {
            $client = new Client();
            // $request = $client->get('https://recruitskillapi.herokuapp.com/api/v1/'.$route);
            $request = $client->get('http://127.0.0.1:8080/api/v1/'.$route);
            $response = $request->getBody()->getContents();
            $project = json_decode($response);
            return $project;
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $project = $e->getResponse();
        }
    }

    public static function postRSRequest(string $route, array $fields, array $post_details = null)
    {

        try {
            $client = new Client();
            $url = 'http://127.0.0.1:8080/api/v1/'.$route;

            $response = $client->request('POST', $url, [
                'form_params' => $fields
            ]);

            $final_response = ['status'=>'success', 'Message'=> $post_details["title"]. ' successfully created'];

            return $final_response;


        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $responseJSON = $e->getResponse();
        }
    }

    public static function putRSRequest(string $route, array $fields, int $id)
    {
        try {
            $client = new Client();
            $url = 'http://127.0.0.1:8080/api/v1/'.$route.$id;
            $request = $client->request('PUT', $url, ['query'=>['fields' => $fields]]);
            // $request = $client->post($url, ['form_params' => $fields]);
            $responseJSON = $request->getBody()->getContents();
            return $responseJSON;
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $responseJSON = $e->getResponse();
        }
    }

    public static function deleteRSRequest(string $route, int $id)
    {
        try {
            $client = new Client();
            $url = 'http://127.0.0.1:8080/api/v1/'.$route.$id;
            // $response = $client->request('DELETE', $url, ['query' => $id]);
            $request = $client->delete($url);
            // $response = $request->send();
            // $response = $client->send($request);
            // $responseJSON = $request->getBody()->getContents();
            // return $responseJSON;
            // dd($response);

            // dd($request);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $request = $e->getResponse();
        }
    }

}
