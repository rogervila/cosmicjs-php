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
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);

        if (curl_getinfo($curl)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($curl);

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
        $postParameters = $parameters->toJson();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postParameters);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($postParameters)
            ]
        );

        $response = curl_exec($curl);

        if (curl_getinfo($curl)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($curl);

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
        $putParameters = $parameters->toJson();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $putParameters);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($putParameters)
            ]
        );

        $response = curl_exec($curl);

        if (curl_getinfo($curl)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($curl);

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
        $deleteParameters = $parameters->toJson();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $deleteParameters);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($deleteParameters)
            ]
        );

        $response = curl_exec($curl);

        if (curl_getinfo($curl)['http_code'] === 404) {
            throw new \Exception(json_encode($response), 404);
        }

        curl_close($curl);

        return $response;
    }
}
