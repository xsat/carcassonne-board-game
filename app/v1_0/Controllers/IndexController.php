<?php

namespace App\v1_0\Controllers;

/**
 * Class IndexController
 */
class IndexController extends Controller
{
    public function homeAction(): void
    {
        $this->response(['message' => 'Hello world.']);
    }
}
