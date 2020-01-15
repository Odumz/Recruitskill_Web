<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Helpers\Helper;

use App\Country;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class CountryController extends Controller
{
    public function getAllCountries(Request $request)
    {
        // $countries = Country::all();
        // return view('countries', compact('countries'));

        $client = new Client();

        $response = $client->$request ('GET', 'https://jsonplaceholder.typicode.com/users/1');

        $decodedPosts = "something else";
        if ($response->getStatusCode() == 200) {
            $decodedPosts = json_decode($response->getBody(), true);
        }
    }

    public function getOneCountry($id)
    {
        $country = Country::findOrFail($id);
        return view('countries', compact('country'));

    }

    public function showAllCountries()
    {
        return response()->json(Country::all());
    }

}
