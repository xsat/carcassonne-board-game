<?php

namespace App\v1_0\Controllers;

use Common\Messenger\Bot\ReplyBot;

/**
 * Class GameController
 */
class GameController extends Controller
{
    public function eventAction(): void
    {
        ob_start();
        echo date('Y-m-d H:i:s'), PHP_EOL;
        var_dump($_GET);
        $this->logger->add('get.txt', ob_get_clean());
        ob_start();
        echo date('Y-m-d H:i:s'), PHP_EOL;
        var_dump($_POST);
        $this->logger->add('post.txt', ob_get_clean());
        ob_start();
        echo date('Y-m-d H:i:s'), PHP_EOL;
        echo file_get_contents('php://input'), PHP_EOL;
        $this->logger->add('put.txt', ob_get_clean());

        if ($this->request->get('hub_mode') == 'subscribe' &&
            $this->request->get('hub_verify_token') == getenv('VERIFY_TOKEN')
        ) {
            $this->response->setContent($this->request->get('hub_challenge'));
        } else {
            $data = json_decode(file_get_contents('php://input'), true);
            $bot = new ReplyBot($this->logger, $this->api, getenv('PAGE_ID'));

            if (isset($data['entry']) && is_array($data['entry'])) {
                foreach ($data['entry'] as $entry) {
                    if (isset($entry['messaging']) && is_array($data['messaging'])) {
                        foreach ($entry['messaging'] as $message) {
                            $bot->handle(is_array($message) ? $message : []);
                        }
                    } else {
                        ob_start();
                        echo '1#', date('Y-m-d H:i:s'), PHP_EOL;
                        var_dump($data);
                        $this->logger->add('debug.txt', ob_get_clean());
                    }
                }
            } else {
                ob_start();
                echo '2#', date('Y-m-d H:i:s'), PHP_EOL;
                var_dump($data);
                $this->logger->add('debug.txt', ob_get_clean());
            }

            $this->response();
        }
    }
}
