<?php

namespace Common\Logger;

/**
 * Class LoggerInterface
 */
interface LoggerInterface
{
    /**
     * @param string $filename
     *
     * @return string
     */
    public function get(string $filename): string;

    /**
     * @param string $filename
     * @param null|string $content
     */
    public function add(string $filename, ?string $content): void;

    /**
     * @param string $filename
     */
    public function clear(string $filename): void;

    /**
     * @param string $filename
     */
    public function delete(string $filename): void;
}
