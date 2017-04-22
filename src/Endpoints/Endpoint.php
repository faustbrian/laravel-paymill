<?php



declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

use BrianFaust\Paymill\Contracts\Endpoint as EndpointContract;

class Endpoint implements EndpointContract
{
    protected $httpClient;

    protected $namespace;

    protected $transformer;

    public function __construct($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function create($parameters)
    {
        return new $this->transformer(
            $this->httpClient->post($this->namespace, $parameters)
        );
    }

    public function read($id)
    {
        return new $this->transformer(
            $this->httpClient->get($this->namespace.'/'.$id)
        );
    }

    public function update($id, $parameters)
    {
        return new $this->transformer(
            $this->httpClient->put($this->namespace.'/'.$id, $parameters)
        );
    }

    public function destroy($id)
    {
        return $this->httpClient->delete($this->namespace.'/'.$id);
    }

    public function lists()
    {
        $response = $this->httpClient->get($this->namespace.'.');

        $subscriptions = [];
        foreach ($response as $subscription) {
            $subscriptions[] = new $this->transformer($subscription);
        }

        return $subscriptions;
    }

    public function cancel($id)
    {
        return $this->httpClient->delete($this->namespace.'/'.$id, [
            'remove' => (int) true,
        ]);
    }

    public function export()
    {
        return $this->httpClient->get($this->namespace, [], ['Accept' => 'text/csv']);
    }
}
