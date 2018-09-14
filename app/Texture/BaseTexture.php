<?php

namespace App\Texture;

/**
 * Class BaseTexture
 */
class BaseTexture
{
    /**
     * @var string
     */
    private $source;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $width;

    /**
     * BaseTexture constructor.
     *
     * @param string $source
     * @param int $height
     * @param int $width
     */
    public function __construct(string $source, int $height, int $width)
    {
        $this->source = $source;
        $this->height = $height;
        $this->width = $width;
    }
}
