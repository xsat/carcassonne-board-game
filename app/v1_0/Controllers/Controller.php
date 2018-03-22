<?php

namespace App\v1_0\Controllers;

//use Nen\Database\Connection;
//use Nen\Database\ConnectionInterface;
use Common\Logger;
use Common\Messenger\Api;
use Common\Messenger\ApiInterface;
use Nen\Formatter\FormatterInterface;
use Nen\Http\RequestInterface;
use Nen\Http\ResponseInterface;
use Nen\Web\Controller as NenController;

/**
 * Class Controller
 */
abstract class Controller extends NenController
{
//    /**
//     * @var ConnectionInterface
//     */
//    protected $connection;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var ApiInterface
     */
    protected $api;

    /**
     * Controller constructor.
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     */
    public function __construct(
        RequestInterface $request,
        ResponseInterface $response
    )
    {
        parent::__construct($request, $response);

        $this->response->setHeader(
            'Content-Type', 'application/json; charset=utf-8'
        );

        $logDirectory = __DIR__ . '/../../../log/';
        $this->logger = new Logger($logDirectory);
        $this->api = new Api(getenv('ACCESS_TOKEN'));

//        $this->connection = new Connection(
//            getenv('DB_HOST'),
//            getenv('DB_DATABASE'),
//            getenv('DB_USERNAME'),
//            getenv('DB_PASSWORD'),
//            getenv('DB_ENGINE')
//        );
    }

    /**
     * @param FormatterInterface $formatter
     */
    protected final function format(FormatterInterface $formatter): void
    {
        $this->response($formatter->format());
    }

    /**
     * @param array|null $data
     */
    protected final function response(array $data = null): void
    {
        $this->response->setJsonContent($data ?? new \stdClass());
    }
}
