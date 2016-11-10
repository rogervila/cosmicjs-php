<?php

namespace Rogervila\CosmicJS\Test;

use Rogervila\CosmicJS\Config;

class ConfigTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function createConfig()
    {
        $config = new Config();

        // Is a Config
        $this->assertInstanceOf('Rogervila\CosmicJS\Config', $config);

        // Check Properties
        foreach (['bucketSlug', 'readKey', 'writeKey'] as $property) {
            $this->assertObjectHasAttribute($property, $config);
        }

        // Check methods
        foreach (['getBucketSlug', 'setBucketSlug', 'getReadKey', 'setReadKey', 'getWriteKey', 'setWriteKey'] as $method) {
            $this->assertTrue(
                method_exists($config, $method),
                'Config does not have method "' . $method . '"'
            );
        }
    }
}