<?php

namespace Blogger\BlogBundle\Services;

use Psr\Log\LoggerInterface;

class Wsse
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function exampleMethod($message1, $message2)
    {
        $this->logger->error($message1, $message2);
        $this->logger->debug($message1, $message2);
        $this->logger->info($message1, $message2);
        $this->logger->notice($message1, $message2);
    }
}