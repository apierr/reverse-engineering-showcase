<?php

namespace Application\Multimedia\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var \Application\Multimedia\ModelBundle\Entity\Customers
     */
    private $customer;


    /**
     * Set amount
     *
     * @param float $amount
     * @return Orders
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set customer
     *
     * @param \Application\Multimedia\ModelBundle\Entity\Customers $customer
     * @return Orders
     */
    public function setCustomer(\Application\Multimedia\ModelBundle\Entity\Customers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Application\Multimedia\ModelBundle\Entity\Customers 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
