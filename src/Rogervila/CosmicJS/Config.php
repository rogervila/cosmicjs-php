<?php

namespace Rogervila\CosmicJS;

class Config
{

    /**
     * @var string
     */
    private $bucket_slug;

    /**
     * @var string
     */
    private $read_key;

    /**
     * @var string
     */
    private $write_key;

    /**
     * @return string
     */
    public function getBucketSlug()
    {
        return $this->bucket_slug;
    }

    /**
     * @param string $bucket_slug
     *
     * @return Config
     */
    public function setBucketSlug($bucket_slug)
    {
        $this->bucket_slug = $bucket_slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getReadKey()
    {
        return $this->read_key;
    }

    /**
     * @param string $read_key
     *
     * @return Config
     */
    public function setReadKey($read_key)
    {
        $this->read_key = $read_key;

        return $this;
    }

    /**
     * @return string
     */
    public function getWriteKey()
    {
        return $this->write_key;
    }

    /**
     * @param string $write_key
     *
     * @return Config
     */
    public function setWriteKey($write_key)
    {
        $this->write_key = $write_key;

        return $this;
    }
}