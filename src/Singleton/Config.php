<?php

declare(strict_types=1);

namespace Design\Pattern\Singleton;

class Config
{
    private static $instance = null;
    private array $props = [];

    private function __construct()
    {

    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new Config();
        }

        return self::$instance;
    }

    public function setProp(string $key, mixed $value): void
    {
        $this->props[$key] = $value;
    }

    public function getProp(string $key): mixed
    {
        return $this->props[$key] ?? null;
    }
}