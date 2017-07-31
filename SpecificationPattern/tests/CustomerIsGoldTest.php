<?php

class CustomerIsGoldTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    function a_customer_is_gold_if_they_have_the_respective_type()
    {

        $specification = new CustomerIsGold;
        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));
    }
}
