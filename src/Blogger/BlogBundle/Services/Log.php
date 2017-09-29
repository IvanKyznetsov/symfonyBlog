<?php

namespace Blogger\BlogBundle\Services;

use Psr\Log\LoggerInterface;

class Log
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function exampleMethod($ourVar)
    {
        $this->logger->debug('detailed debug output');
        $this->logger->info('e.g. a user logged in');
        $this->logger->notice('normal but significant events');

        // and so on
    }
}