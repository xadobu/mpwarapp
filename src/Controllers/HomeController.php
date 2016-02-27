<?php


namespace Mpwar16App\Controllers;

use Mpwarfwk\Component\Http\Controller\Controller;
use Mpwarfwk\Component\Http\Request\Request;
use Mpwarfwk\Component\Http\Response\Response;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $templating = $this->container->get('smarty_templating');
        $templating->setTemplatesPath(__DIR__ . '/../../templates/views');
        return new Response($request->getHeader(), $templating->show('register'));
    }

    public function save(Request $request)
    {
        $db = $this->container->get('database_pdo');
        $email = $request->getRequest('email');
        $password = $request->getRequest('password');
        $db->execute("INSERT INTO user (email, password) VALUES (?,?)", array($email,$password));
        $templating = $this->container->get('twig_templating');
        $templating->setTemplatesPath(__DIR__ . '/../../templates/views');
        return new Response(null, $templating->show('done'));
    }
}