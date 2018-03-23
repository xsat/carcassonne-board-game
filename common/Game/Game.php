<?php

namespace Common\Game;

use Common\Game\Component\CityComponent;
use Common\Game\Component\CloisterComponent;
use Common\Game\Component\CrossroadComponent;
use Common\Game\Component\FieldComponent;
use Common\Game\Component\NullComponent;
use Common\Game\Component\RoadComponent;

/**
 * Class Game
 */
class Game
{
    /**
     * @var Terrain[]
     */
    private $terrains = [];

    private function generate(): void
    {
        $this->terrains[] = new Terrain(
            new CloisterComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new FieldComponent()
        );
        $this->terrains[] = new Terrain(
            new CloisterComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new RoadComponent()
        );
        $this->terrains[] = new Terrain(
            new NullComponent(),
            new RoadComponent(),
            new RoadComponent(),
            new FieldComponent(),
            new FieldComponent()
        );
        $this->terrains[] = new Terrain(
            new NullComponent(),
            new RoadComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new RoadComponent()
        );
        $this->terrains[] = new Terrain(
            new CrossroadComponent(),
            new RoadComponent(),
            new RoadComponent(),
            new FieldComponent(),
            new RoadComponent()
        );
        $this->terrains[] = new Terrain(
            new CrossroadComponent(),
            new RoadComponent(),
            new RoadComponent(),
            new RoadComponent(),
            new RoadComponent()
        );

        $this->terrains[] = new Terrain(
            new NullComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new CityComponent(),
            new FieldComponent()
        );
        $this->terrains[] = new Terrain(
            new NullComponent(),
            new RoadComponent(),
            new RoadComponent(),
            new CityComponent(),
            new FieldComponent()
        );
        $this->terrains[] = new Terrain(
            new NullComponent(),
            new RoadComponent(),
            new FieldComponent(),
            new CityComponent(),
            new RoadComponent()
        );
        $this->terrains[] = new Terrain(
            new NullComponent(),
            new FieldComponent(),
            new RoadComponent(),
            new CityComponent(),
            new RoadComponent()
        );
        $this->terrains[] = new Terrain(
            new CrossroadComponent(),
            new RoadComponent(),
            new RoadComponent(),
            new CityComponent(),
            new RoadComponent()
        );

        $this->terrains[] = new Terrain(
            new CityComponent(),
            new CityComponent(),
            new CityComponent(),
            new FieldComponent(),
            new FieldComponent()
        );
        $this->terrains[] = new Terrain(
            new NullComponent(),
            new FieldComponent(),
            new CityComponent(),
            new CityComponent(),
            new FieldComponent()
        );
        $this->terrains[] = new Terrain(
            new NullComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new CityComponent(),
            new CityComponent()
        );

        $this->terrains[] = new Terrain(
            new NullComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new CityComponent(),
            new CityComponent()
        );











        $this->terrains[] = new Terrain(
            new NullComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new FieldComponent(),
            new FieldComponent()
        );
    }
}
