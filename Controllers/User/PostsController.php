<?php

namespace Application\Controllers\User;

use DevNet\Web\Controller\ActionController;
use DevNet\Web\Controller\IActionResult;
use DevNet\Web\Controller\Filters\AuthorizeFilter;

class PostsController extends ActionController
{
    public function __construct()
    {
        $this->filter(self::class, AuthorizeFilter::class);
    }

    public function index() : IActionResult
    {
        return $this->view();
    }

    public function new() : IActionResult
    {
        return $this->view();
    }

    public function edit() : IActionResult
    {
        return $this->view();
    }
}
