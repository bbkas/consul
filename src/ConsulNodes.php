<?php

declare(strict_types=1);

namespace Bbkas\Consul;

class ConsulNodes
{
    private Consul $consul;

    public function __construct(Consul $consul)
    {
        $this->consul = $consul;
    }
}