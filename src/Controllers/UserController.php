<?php

namespace Mpwar16App\Controllers;

use Mpwarfwk\Component\Http\Controller\Controller;
use Mpwarfwk\Component\Http\Request\Request;
use Mpwarfwk\Component\Http\Response\JsonResponse;
use Mpwarfwk\Component\Http\Response\Response;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $sample = array(
            "users" => array(
                array(
                    "name" => "John",
                    "surname" => "Doe",
                    "age" => 40
                ),
                array(
                    "name" => "Jane",
                    "surname" => "Doe",
                    "age" => 35
                )
            )
        );
        return new JsonResponse($request->getHeader(), $sample);
    }

    public function show(Request $request)
    {

        return new JsonResponse($request->getHeader(), "{text: 'Test JSONResponse', userID: {$request->get('id')}}");
    }
}