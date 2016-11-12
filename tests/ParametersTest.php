<?php

namespace Rogervila\CosmicJS\Test;

use Rogervila\CosmicJS\Config;
use Rogervila\CosmicJS\Parameters;

class ParametersTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function createConfig()
    {
        $config     = new Config();
        $parameters = new Parameters($config);

        // Is a Parameter
        $this->assertInstanceOf('Rogervila\CosmicJS\Parameters', $parameters);

        // Check Properties
        foreach (['title', 'typeSlug', 'writeKey', 'metafields'] as $property) {
            $this->assertObjectHasAttribute($property, $parameters);
        }

        // Check methods
        foreach (['toJson'] as $method) {
            $this->assertTrue(
                method_exists($parameters, $method),
                'Parameters does not have method "' . $method . '"'
            );
        }
    }
}