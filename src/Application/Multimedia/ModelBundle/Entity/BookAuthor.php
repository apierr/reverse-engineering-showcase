<?php

namespace Application\Multimedia\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookAuthor
 */
class BookAuthor
{
    /**
     * @var integer
     */
    private $bookId;

    /**
     * @var integer
     */
    private $authorId;


    /**
     * Set bookId
     *
     * @param integer $bookId
     * @return BookAuthor
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;

        return $this;
    }

    /**
     * Get bookId
     *
     * @return integer 
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     * @return BookAuthor
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }
}
