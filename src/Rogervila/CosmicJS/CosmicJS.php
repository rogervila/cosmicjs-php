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
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $objects_url;

    /**
     * @var string
     */
    private $media_url;

    /**
     * @var string
     */
    private $add_object_url;

    /**
     * @var string
     */
    private $edit_object_url;

    /**
     * @var string
     */
    private $delete_object_url;

    /**
     * CosmicJS constructor.
     *
     * @param Config $config
     */
    function __construct(Config $config)
    {
        $this->api = new Api();

        $this->bucket_slug = $config->getBucketSlug();
        $this->read_key    = $config->getReadKey();
        $this->write_key   = $config->getWriteKey();

        $this->url               = "https://api.cosmicjs.com/v1/" . $this->bucket_slug;
        $this->objects_url       = $this->url . "/objects?read_key=" . $this->read_key;
        $this->media_url         = $this->url . "/media?read_key=" . $this->read_key;
        $this->add_object_url    = $this->url . "/add-object?write_key=" . $this->write_key;
        $this->edit_object_url   = $this->url . "/edit-object?write_key=" . $this->write_key;
        $this->delete_object_url = $this->url . "/delete-object?write_key=" . $this->write_key;
    }

    /**
     * @return \Exception|mixed
     */
    public function getBucket()
    {
        try {
            $response = $this->api->get($this->url . "?read_key=" . $this->read_key);
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
            $response = $this->api->get($this->objects_url);
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
            $response = $this->api->get($this->url . "/object/" . $slug . "?read_key=" . $this->read_key);
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
            $response = $this->api->get($this->media_url);
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
            $response = $this->api->post($this->add_object_url, $parameters);
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
            $response = $this->api->put($this->edit_object_url, $parameters);
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
            $response = $this->api->delete($this->delete_object_url, $parameters);
        } catch (\Exception $e) {
            $response = $e;
        }

        return $response;
    }
}