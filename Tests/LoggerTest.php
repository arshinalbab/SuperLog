<?php

namespace SuperLog\Tests;

use SuperLog\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    private $logFile = 'test_log.txt';

    protected function setUp(): void
    {
        // Clean up the log file before each test
        file_put_contents($this->logFile, '');
    }

    protected function tearDown(): void
    {
        // Remove the log file after each test
        unlink($this->logFile);
    }

    public function testLog()
    {
        $logger = new Logger($this->logFile);
        $message = 'Testing logging functionality';

        $logger->log($message);

        $this->assertFileExists($this->logFile);
        $this->assertStringContainsString($message, file_get_contents($this->logFile));
    }
}
