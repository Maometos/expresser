<?php

namespace Application\Controllers;

use DevNet\Web\Action\IActionResult;
use DevNet\Web\Action\ActionController;

class HomeController extends ActionController
{
    public function index(): IActionResult
    {
        return $this->view();
    }

    public function about(): IActionResult
    {
        return $this->view();
    }

    public function contact(): IActionResult
    {
        return $this->view();
    }

    public function error(): IActionResult
    {
        $code = $this->HttpContext->Error ? $this->HttpContext->Error->getCode() : 404;
        
        switch ($code) {
            case 401:
                return $this->redirect('/user/account/login');
                break;
            case 403:
                $error = new \Exception("Sorry! Your request is not allowed.", 403);
                break;
            case 404:
                $error = new \Exception("Sorry! Looks like this page doesn't exist.", 404);
                break;
            default:
                $error = new \Exception("Woops! Looks like something went wrong.", 500);
                break;
        }

        return $this->view($error);
    }
}
