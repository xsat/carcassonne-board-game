<?php

namespace App\v1_0\Controllers;

/**
 * Class GameController
 */
class GameController extends Controller
{
    public function eventAction(): void
    {
        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        } else {
            $this->response(['success' => true]);
        }
    }
}
