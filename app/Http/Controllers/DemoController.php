<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DemoController extends Controller
{
    function DemoAction(){
        return "This is test controller";
    }
    function DataAction(Request $request):array{
        $pin = $request->header('pin');
        $name = $request-> input('name');
        $age = $request-> input('age');
        $city = $request->city;
        $postcode = $request->postcode;

        return array(
            "pin" => $pin,
            "name" => $name,
            "age" => $age,
            "city" => $city,
            "postcode" => $postcode,
        );
    }
}
