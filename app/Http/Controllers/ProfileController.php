<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id) {

        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age
        ];

        $Cookiename = "access_token";
        $value = "123-XYZ";
        $minutes = 60;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;
        
        return response()->json($data, 200)->withCookie($Cookiename, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
