<?php declare(strict_types=1);

namespace Comquer\DomainIntegration\Event\Queue;

interface EventQueueItemPublisher
{
    public function publish(EventQueueItem $eventQueueItem) : void;

    public static function getQueueName() : string;
}
