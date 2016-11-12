<?php

namespace Rogervila\CosmicJS\Test;

use Rogervila\CosmicJS\Config;

class ConfigTest extends \PHPUnit_Framework_TestCase
{
    use Credentials;

    /** @test */
    public function checkConfigPropertiesAndMethods()
    {
        $config = new Config();

        // Is a Config
        $this->assertInstanceOf('Rogervila\CosmicJS\Config', $config);

        // Check Properties
        foreach (['bucketSlug', 'readKey', 'writeKey'] as $property) {
            $this->assertObjectHasAttribute($property, $config);
        }

        $methods = [
            'getBucketSlug',
            'setBucketSlug',
            'getReadKey',
            'setReadKey',
            'getWriteKey',
            'setWriteKey'
        ];

        // Check methods
        foreach ($methods as $method) {
            $this->assertTrue(
                method_exists($config, $method),
                'Config does not have method "' . $method . '"'
            );
        }
    }

    /** @test */
    public function createConfigAndConnectWithCosmic()
    {
        $config = new Config();

        $config
            ->setBucketSlug($this->bucket)
            ->setWriteKey($this->writeKey)
            ->setReadKey($this->readKey);

        $this->assertEquals($config->getWriteKey(), $this->writeKey);
        $this->assertEquals($config->getReadKey(), $this->readKey);
        $this->assertEquals($config->getBucketSlug(), $this->bucket);
    }
}