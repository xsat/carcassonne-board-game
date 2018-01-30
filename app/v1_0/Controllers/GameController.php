<?php

namespace App\v1_0\Controllers;

/**
 * Class GameController
 */
class GameController extends Controller
{
    public function getAction(): void
    {
        ob_start();
        echo date('Y-m-d H:i:s'), "\r\n";
        var_dump($_GET);
        $this->logger->add('get.txt', ob_get_clean());

        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        } else {
            $this->response();
        }
    }

    public function postAction(): void
    {
        ob_start();
        echo date('Y-m-d H:i:s'), "\r\n";
        var_dump($_POST);
        $this->logger->add('post.txt', ob_get_clean());

        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        } else {
            $this->response();
        }
    }

    public function putAction(): void
    {
        ob_start();
        echo date('Y-m-d H:i:s'), "\r\n";
        echo file_get_contents('php://input');
        $this->logger->add('put.txt', ob_get_clean());

        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        } else {
            $this->response();
        }
    }
}
