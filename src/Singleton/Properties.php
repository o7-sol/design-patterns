<?php

declare(strict_types=1);

namespace Design\Pattern\Singleton;

class Properties
{
    private array $properties = [];
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new Properties();
        }

        return self::$instance;
    }

    public function setProp(string $key, mixed $value): void
    {
        $this->properties[$key] = $value;
    }

    public function getProp(string $key): mixed
    {
        return $this->properties[$key] ?? null;
    }
}