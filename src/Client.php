<?php

namespace BrianFaust\Paymill;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\BadResponseException;

class Client
{
    private $baseUrl = 'https://api.paymill.com/v2.1/';

    private $headers = ['User-Agent' => 'BrianFaust-Paymill/1.0.0'];

    private $httpClient;

    public function __construct($secret)
    {
        $this->httpClient = new GuzzleClient([
            'base_url' => $this->baseUrl,
            'defaults' => [
                'headers' => $this->headers,
                'auth' => [
                    $secret,
                    'password',
                ],
            ],
        ]);
    }

    public function api($class)
    {
        $class = 'BrianFaust\\Paymill\\Endpoints\\'.$class;

        return new $class($this);
    }

    public function payments()
    {
        return $this->api('Payment');
    }

    public function preauthorizations()
    {
        return $this->api('Preauthorization');
    }

    public function transactions()
    {
        return $this->api('Transaction');
    }

    public function refunds()
    {
        return $this->api('Refund');
    }

    public function customers()
    {
        return $this->api('Customer');
    }

    public function plans()
    {
        return $this->api('Plan');
    }

    public function subscriptions()
    {
        return $this->api('Subscription');
    }

    public function webhooks()
    {
        return $this->api('Webhook');
    }

    public function get($path, $parameters = [], $headers = [])
    {
        return $this->sendRequest($path, $parameters, 'GET', $headers);
    }

    public function post($path, $parameters = [])
    {
        return $this->sendRequest($path, $parameters, 'POST');
    }

    public function put($path, $parameters = [])
    {
        return $this->sendRequest($path, $parameters, 'PUT');
    }

    public function delete($path, $parameters = [])
    {
        return $this->sendRequest($path, $parameters, 'DELETE');
    }

    private function sendRequest($path, $parameters, $method, $headers = [])
    {
        try {
            $client = $this->httpClient;

            switch (strtolower($method)) {
                case 'get':
                    $response = $client->get($path, [
                        'query' => $parameters,
                        'headers' => $headers,
                    ]);
                break;

                case 'post':
                    $response = $client->post($path, [
                        'body' => $parameters,
                    ]);
                break;

                case 'put':
                    $response = $client->put($path, [
                        'body' => $parameters,
                    ]);
                break;

                case 'delete':
                    $response = $client->delete($path, [
                        'query' => $parameters,
                    ]);
                break;

                default:
                    throw new \InvalidArgumentException('Neither GET, POST, PUT nor DELETE is specified for request');
                    break;
            }

            return $this->handleResponse($response, !empty($headers));
        } catch (BadResponseException $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    private function handleResponse($response, $export)
    {
        $statusCode = $response->getStatusCode();

        $body = $export ? $response->getBody()
                        : $response->json(['object' => true])->data;

        if ($statusCode >= 200 && $statusCode < 300) {
            return $body;
        }

        throw new \Exception($body->message, $statusCode);
    }
}
