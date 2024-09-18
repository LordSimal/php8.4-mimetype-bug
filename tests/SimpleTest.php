<?php

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase {
    public function test_mimetype() {
        $this->assertEquals('text/x-php', mime_content_type(__DIR__ . '/TestFile.php'));
    }
}

