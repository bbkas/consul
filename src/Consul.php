<?php
declare(strict_types=1);

namespace Bbkas\Consul;

class Consul
{
    private ConsulKv       $kv;
    private ConsulServices $services;
    private ConsulConfig   $config;

    public function __construct(ConsulConfig $config)
    {
        $this->setConfig($config);
    }

    public function services(): ConsulServices
    {
        if (!isset($this->services)) {
            $this->services = new ConsulServices($this);
        }

        return $this->services;
    }

    public function kv(): ConsulKv
    {
        if (!isset($this->services)) {
            $this->kv = new ConsulKv($this);
        }

        return $this->kv;
    }

    public function nodes(): ConsulNodes
    {
        if (!isset($this->nodes)) {
            $this->nodes = new ConsulNodes($this);
        }

        return $this->nodes;
    }

    public function getConfig(): ConsulConfig
    {
        return $this->config;
    }

    public function setConfig(ConsulConfig $config): void
    {
        $this->config = $config;
    }

    public function get(string $path): ?string
    {
        return null;
    }

    public function put(string $path, $data): bool
    {
        return false;
    }
}