<?php declare(strict_types=1);

namespace Comquer\Event;

use Comquer\DomainIntegration\Event\Event;
use Comquer\DomainIntegration\NamedResource;

interface EventListener extends NamedResource
{
    public function __invoke(Event $event) : void;
}