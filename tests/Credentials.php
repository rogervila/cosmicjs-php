<?php

namespace Rogervila\CosmicJS\Test;

trait Credentials
{
    /**
     * @var string
     */
    protected $writeKey;

    /**
     * @var string
     */
    protected $readKey;

    /**
     * @var string
     */
    protected $bucket;

    /**
     * @var string
     */
    protected $objectType;

    /**
     * Set up CosmicJS credentials
     */
    protected function setUp()
    {
        $this->bucket = 'github';
        $this->readKey = '6fGIoBcDCkIkC1EF5B1ZTtGvNN0oTUWFCSPDAfbrbyeoKeVnVN';
        $this->writeKey = 'k7DyuOK9GBttrqG1QBVw2NF4sBSKIzaSeRwFEbGuiXT7ZkGblX';
        $this->objectType = 'tests';
    }
}