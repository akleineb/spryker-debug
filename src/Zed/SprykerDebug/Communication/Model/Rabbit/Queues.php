<?php

namespace Inviqa\Zed\SprykerDebug\Communication\Model\Rabbit;

use ArrayIterator;
use Countable;
use IteratorAggregate;

class Queues implements IteratorAggregate, Countable
{
    /**
     * @var array
     */
    private $queues;

    public function __construct(Queue ...$queues)
    {
        $this->queues = $queues;
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->queues);
    }

    /**
     * {@inheritDoc}
     */
    public function count(): int
    {
        return count($this->queues);
    }
}