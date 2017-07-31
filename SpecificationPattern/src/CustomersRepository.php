<?php

class CustomersRepository
{
    protected $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function bySpecification($specification)
    {
        $match = [];

        foreach ($this->customers as $key => $customer) {
            if ($specification->isSatisfiedBy($customer)) {
                $matches[] = $customer;
            }
        }

        return $matches;
    }

    public function all()
    {
        return $this->customers;
    }
}
