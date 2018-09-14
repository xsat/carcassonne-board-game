<?php

namespace Api\v1_0\Controllers;

/**
 * Class LogController
 */
class LogController extends Controller
{
    /**
     * @param string $type
     */
    public function loadAction(string $type): void
    {
        $this->response->setContent(
            $this->logger->get($type . '.txt')
        );
    }

    /**
     * @param string $type
     */
    public function clearAction(string $type): void
    {
        $this->logger->clear($type . '.txt');
    }
}
