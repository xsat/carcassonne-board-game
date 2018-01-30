<?php

namespace App\v1_0\Controllers;

/**
 * Class GameController
 */
class GameController extends Controller
{
    public function eventAction(): void
    {
        $this->response(['success' => true]);
    }
}
