<?php

namespace Common\Game\Component;

/**
 * Class DoubleComponent
 */
class DoubleComponent implements ComponentInterface
{
    /**
     * @var ComponentInterface
     */
    private $first;

    /**
     * @var ComponentInterface
     */
    private $second;

    /**
     * DoubleComponent constructor.
     *
     * @param ComponentInterface $first
     * @param ComponentInterface $second
     */
    public function __construct(
        ComponentInterface $first,
        ComponentInterface $second
    )
    {
        $this->first = $first;
        $this->second = $second;
    }
}
