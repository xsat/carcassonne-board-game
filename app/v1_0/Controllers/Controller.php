<?php

namespace App\v1_0\Controllers;

use Common\Logger\FileLogger;
use Common\Logger\LoggerInterface;
use Common\Messenger\Api;
use Common\Messenger\ApiInterface;
use Nen\Database\ConnectionInterface;
use Nen\Database\PDOConnection;
use Nen\Formatter\FormatterInterface;
use Nen\Http\RequestInterface;
use Nen\Http\ResponseInterface;
use Nen\Web\Controller as NenController;
use PDO;

/**
 * Class Controller
 */
abstract class Controller extends NenController
{
    /**
     * @var ConnectionInterface
     */
    protected $connection;

    /**
     * @var LoggerInterface
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
        $this->logger = new FileLogger($logDirectory);
        $this->api = new Api(getenv('ACCESS_TOKEN'));
        $this->connection = new PDOConnection(
            new PDO(
                getenv('DATABASE_DSN'),
                getenv('DATABASE_USERNAME'),
                getenv('DATABASE_PASSWORD'),
                [
                    PDO::ATTR_CASE => PDO::CASE_NATURAL,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
                    PDO::ATTR_STRINGIFY_FETCHES => false,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            )
        );
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
