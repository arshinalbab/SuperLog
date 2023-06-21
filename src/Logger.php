<?php

namespace SuperLog;

class Logger
{
    private $logFile;

    public function __construct($logFile = 'log.txt')
    {
        $this->logFile = $logFile;
    }

    public function log($message)
    {
        file_put_contents($this->logFile, $message . PHP_EOL, FILE_APPEND);
    }
}
