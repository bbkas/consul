<?php

declare(strict_types=1);

namespace Bbkas\Consul;

class ConsulKv
{
    private Consul $consul;

    public function __construct(Consul $consul)
    {
        $this->consul = $consul;
    }
}