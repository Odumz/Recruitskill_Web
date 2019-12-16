<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getAllCountries(Request $request)
    {
        $countries = Country::all();
        return view('countries', compact('countries'));
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
