<?php declare(strict_types=1);

namespace Comquer\Domain;

class Id
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString() : string
    {
        return $this->value;
    }
}