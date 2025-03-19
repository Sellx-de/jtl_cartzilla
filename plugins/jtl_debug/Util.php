<?php

declare(strict_types=1);

namespace Plugin\jtl_debug;

/**
 * Class Util
 * @package Plugin\jtl_debug
 */
class Util
{
    private array $userDebug = [];

    /**
     * custom debug output
     *
     * @param mixed  $var
     * @param string $name
     * @return $this
     */
    public function dump($var, string $name = 'dumped_var'): self
    {
        $this->userDebug[$name] = $var;

        return $this;
    }

    public function getUserDebug(): array
    {
        return $this->userDebug;
    }
}
