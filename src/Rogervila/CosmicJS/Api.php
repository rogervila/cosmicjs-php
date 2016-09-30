<?php

namespace Rogervila\CosmicJS;

class Api
{
    /**
     * @param $url
     *
     * @return mixed
     * @throws \Exception
     */
    public function get($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_getinfo($ch)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($ch);

        return $response;
    }

    /**
     * @param $url
     * @param Parameters $parameters
     *
     * @return mixed
     * @throws \Exception
     */
    public function post($url, Parameters $parameters)
    {
        $object_string = $parameters->toJson();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $object_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($object_string)
            ]
        );

        $response = curl_exec($ch);

        if (curl_getinfo($ch)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($ch);

        return $response;

    }

    /**
     * @param $url
     * @param Parameters $parameters
     *
     * @return mixed
     * @throws \Exception
     */
    public function put($url, Parameters $parameters)
    {
        $object_string = $parameters->toJson();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $object_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($object_string)
            ]
        );

        $response = curl_exec($ch);

        if (curl_getinfo($ch)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($ch);

        return $response;

    }

    /**
     * @param $url
     * @param Parameters $parameters
     *
     * @return mixed
     * @throws \Exception
     */
    public function delete($url, Parameters $parameters)
    {
        $object_string = $parameters->toJson();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $object_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($object_string)
            ]
        );

        $response = curl_exec($ch);

        if (curl_getinfo($ch)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($ch);

        return $response;
    }
}