<?php

namespace Rogervila\CosmicJS;

class Parameters
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $typeSlug;

    /**
     * An array of Rogervila\CosmicJS\Metafield objects
     *
     * @var array
     */
    public $metafields;

    /**
     * @var string
     */
    private $writeKey;

    /**
     * Parameters constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->writeKey = $config->getWriteKey();
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode(get_object_vars($this));
    }
}
