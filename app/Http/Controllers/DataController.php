<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{


    public static function getProvinvias(){
        $jsonString = file_get_contents(base_path('resources/data/provinces.json'));
        $provincias = (json_decode($jsonString, true))['places'];
        return $provincias;
    }

    public static function getDistritos(){
        $jsonString = file_get_contents(base_path('resources/data/districts.json'));
        $distritos = collect(json_decode($jsonString, true)['places']);
        return ($distritos);
    }
}
