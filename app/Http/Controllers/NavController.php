<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NavController extends Controller
{
    public static function getMenuData()
    {
        return [
            'about' => [
                "STATUT FUNDACJI" => "/statut-fundacji",
                "ZARZĄD FUNDACJI" => "/zarzad-fundacji",
                "CELE I ZASADY DZIAŁANIA" => "/cele-i-zasady-dzialania",
                "DZIAŁALNOŚĆ GOSPODARCZA" => "/dzialalnosc-gospodarcza",
                "SPRAWOZDANIA" => "/sprawozdania"
            ],
            'main' => [
                "PRAKTYKI" => "praktyki",
                "PROJEKTY" => "projekty",
                "AKTUALNOŚCI" => "aktualnosci",
                "GALERIA" => "galeria",
                "KONTAKT" => "kontakt",
                "OPINIE" => "opinie"
            ]
        ];
    }
}