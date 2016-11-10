<?php

namespace Rogervila\CosmicJS;

class Config
{

    /**
     * @var string
     */
    private $bucketSlug;

    /**
     * @var string
     */
    private $readKey;

    /**
     * @var string
     */
    private $writeKey;

    /**
     * @return string
     */
    public function getBucketSlug()
    {
        return $this->bucketSlug;
    }

    /**
     * @param string $bucketSlug
     *
     * @return Config
     */
    public function setBucketSlug($bucketSlug)
    {
        $this->bucketSlug = $bucketSlug;

        return $this;
    }

    /**
     * @return string
     */
    public function getReadKey()
    {
        return $this->readKey;
    }

    /**
     * @param string $readKey
     *
     * @return Config
     */
    public function setReadKey($readKey)
    {
        $this->readKey = $readKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getWriteKey()
    {
        return $this->writeKey;
    }

    /**
     * @param string $writeKey
     *
     * @return Config
     */
    public function setWriteKey($writeKey)
    {
        $this->writeKey = $writeKey;

        return $this;
    }
}