<?php

namespace SfCod\QueueBundle\Event;

use SfCod\QueueBundle\Job\JobContractInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class JobProcessedEvent
 * Event on job processed event
 *
 * @author Virchenko Maksim <muslim1992@gmail.com>
 *
 * @package SfCod\QueueBundle\Events
 */
class JobProcessedEvent extends Event
{
    /**
     * The connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The job instance.
     *
     * @var JobContractInterface
     */
    public $job;

    /**
     * Create a new event instance.
     *
     * @param string $connectionName
     * @param JobContractInterface $job
     * @param array $config
     */
    public function __construct(string $connectionName, JobContractInterface $job, array $config = [])
    {
        $this->job = $job;
        $this->connectionName = $connectionName;
    }
}
