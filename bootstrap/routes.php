<?php

use App\v1_0\Controllers\GameController;
use App\v1_0\Controllers\IndexController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Route;
use Nen\Router\Routes;

return new Routes([
    new Route(IndexController::class, '', null, Request::METHOD_GET),
    new Group('api/1.0', new Routes([
        new Group('game', new Routes([
            new Route(GameController::class, 'event', null, Request::METHOD_POST),
        ])),
    ])),
]);
