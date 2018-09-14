<?php

namespace App\Texture;

/**
 * Interface TextureInterface
 */
interface TextureInterface
{
    /**
     * @return string
     */
    public function getSource(): string;

    /**
     * @return int
     */
    public function getHeight(): int;

    /**
     * @return int
     */
    public function getWidth(): int;
}
