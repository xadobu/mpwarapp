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
        $templating = $this->container->get('twig_templating');
        $templating->setTemplatesPath(__DIR__.'/../../templates/views');
        return new Response($request->getHeader(), $templating->show('login'));
    }

    public function show(Request $request)
    {
        return new JsonResponse(null, "{text: 'Test JSONResponse', userID: {$request->get('id')}}");
    }
}