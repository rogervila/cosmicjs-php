<?php

namespace Rogervila\CosmicJS;

class CosmicJS
{
    /**
     * @var Api
     */
    private $api;

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
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $objectsUrl;

    /**
     * @var string
     */
    private $mediaUrl;

    /**
     * @var string
     */
    private $addObjectUrl;

    /**
     * @var string
     */
    private $editObjectUrl;

    /**
     * @var string
     */
    private $deleteObjectUrl;

    /**
     * CosmicJS constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->api = new Api();

        $this->bucketSlug = $config->getBucketSlug();
        $this->readKey    = $config->getReadKey();
        $this->writeKey   = $config->getWriteKey();

        $this->url             = "https://api.cosmicjs.com/v1/" . $this->bucketSlug;
        $this->objectsUrl      = $this->url . "/objects?read_key=" . $this->readKey;
        $this->mediaUrl        = $this->url . "/media?read_key=" . $this->readKey;
        $this->addObjectUrl    = $this->url . "/add-object?write_key=" . $this->writeKey;
        $this->editObjectUrl   = $this->url . "/edit-object?write_key=" . $this->writeKey;
        $this->deleteObjectUrl = $this->url . "/delete-object?write_key=" . $this->writeKey;
    }

    /**
     * @return \Exception|mixed
     */
    public function getBucket()
    {
        try {
            $response = $this->api->get($this->url . "?read_key=" . $this->readKey);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }


    /**
     * @return \Exception|mixed
     */
    public function getObjects()
    {
        try {
            $response = $this->api->get($this->objectsUrl);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }

    /**
     * @param $slug
     *
     * @return \Exception|mixed
     */
    public function getObject($slug)
    {
        try {
            $response = $this->api->get($this->url . "/object/" . $slug . "?read_key=" . $this->readKey);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }

    /**
     * @return \Exception|mixed
     */
    public function getMedia()
    {
        try {
            $response = $this->api->get($this->mediaUrl);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }

    /**
     * @param Parameters $parameters
     *
     * @return \Exception|mixed
     */
    public function addObject(Parameters $parameters)
    {
        try {
            $response = $this->api->post($this->addObjectUrl, $parameters);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }

    /**
     * @param Parameters $parameters
     *
     * @return \Exception|mixed
     */
    public function editObject(Parameters $parameters)
    {
        try {
            $response = $this->api->put($this->editObjectUrl, $parameters);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }

    /**
     * @param Parameters $parameters
     *
     * @return \Exception|mixed
     */
    public function deleteObject(Parameters $parameters)
    {
        try {
            $response = $this->api->delete($this->deleteObjectUrl, $parameters);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }
}
