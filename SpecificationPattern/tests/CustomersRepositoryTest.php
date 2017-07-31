<?php

class CustomerRepositoryTest extends \PHPUnit\Framework\TestCase
{
    protected $customers;

    public function setup()
    {
        $this->customers = new CustomersRepository(
            [
                new Customer('gold'),
                new Customer('bronze'),
                new Customer('silver'),
                new Customer('diamond'),
            ]
        );
    }

    /** @test */
    function it_fetches_all_customers()
    {
        $results = $this->customers->all();
        $this->assertCount(4, $results);
    }

    /** @test */
    function it_fetches_all_customers_who_match_a_given_specification()
    {
        $results = $this->customers->bySpecification(new CustomerIsGold);
        $this->assertCount(2, $results);
    }

}
