<?php

namespace BrianFaust\Paymill\Contracts;

interface Endpoint
{
    public function create($parameters);

    public function read($id);

    public function update($id, $parameters);

    public function destroy($id);

    public function lists();

    public function cancel($id);

    public function export();
}
