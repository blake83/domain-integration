<?php declare(strict_types=1);

namespace Comquer\Domain\Serialization;

interface Serializable
{
    public function serialize() : array;
}