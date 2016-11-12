<?php

namespace Rogervila\CosmicJS\Test;

use Rogervila\CosmicJS\Api;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function checkConfigPropertiesAndMethods()
    {
        $api = new Api();

        // Is a Api
        $this->assertInstanceOf('Rogervila\CosmicJS\Api', $api);

        // Check methods
        foreach (['get', 'post', 'put', 'delete'] as $method) {
            $this->assertTrue(
                method_exists($api, $method),
                'Config does not have method "' . $method . '"'
            );
        }
    }
}