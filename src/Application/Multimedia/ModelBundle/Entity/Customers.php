<?php

namespace Application\Multimedia\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customers
 */
class Customers
{
    /**
     * @var string
     */
    private $customerName;

    /**
     * @var integer
     */
    private $customerId;


    /**
     * Set customerName
     *
     * @param string $customerName
     * @return Customers
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string 
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Get customerId
     *
     * @return integer 
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
}
