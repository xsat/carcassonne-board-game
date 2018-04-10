<?php

namespace Common\Game\Terrain;

use Common\Game\Rotation\RotationInterface;

/**
 * Interface TerrainInterface
 */
interface TerrainInterface
{
    /**
     * @param RotationInterface $rotation
     */
    public function rotate(RotationInterface $rotation): void;

    /**
     * @param TerrainInterface $terrain
     *
     * @return bool
     */
    public function connect(TerrainInterface $terrain): bool;
}
