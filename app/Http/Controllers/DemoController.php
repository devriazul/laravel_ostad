<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DemoController extends Controller
{
    function DemoAction(){
        return "This is test controller";
    }
    function DataAction(Request $request):string{
        $name = $request-> name;
        $age = $request-> age;
        return "My Name Is $name and my age is $age.";
    }
}
