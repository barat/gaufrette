<?php

namespace Gaufrette\Adapter;

/**
 * Interface which add supports for headers
 *
 * @author thek
 */
interface HeaderSupporter
{
    /**
     * @param string $key
     * @param array  $content
     */
    public function setHeader($key, $content);

    /**
     * @param  string $key
     * @return array
     */
    public function getHeader($key);
}
