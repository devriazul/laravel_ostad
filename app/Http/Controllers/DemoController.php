<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DemoController extends Controller
{
    function jsonResponse(){
        return response()->json([
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ]);

    }
    function DataAction(Request $request):array{
        $userAgent = $request->header('User-Agent');
        $name = $request-> input('name');
        $page = $request->query('page', null);
        $rememberToken = $request->cookie('remember_token', null);

        return array(
            "User-Agent" => $userAgent,
            "name" => $name,
            "page" => $page,
            "remember_token" => $rememberToken
        );
    }
    function fileHandle(Request $request){
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }

    }
    function Submit(Request $request){
        $email = $request->input('email');
        return response()->json([
            'success' => true,
            'message' => 'Form submitted successfully.'
        ]);
    }
}
