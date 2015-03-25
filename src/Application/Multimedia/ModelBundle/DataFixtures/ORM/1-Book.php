<?php
// src/Appication/Multimedia/ModelBundle/DataFixtures/ORM/1-Book.php

namespace Application\Multimedia\ModelBundle\DataFixtures\ORM;

use Application\Multimedia\ModelBundle\Entity\Book;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixturesInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixture for the Book Entity
 */
class LoadBookData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $books = array(
            array('JavaScript: The Good Parts', 17),
            array('Learning PHP 5', 18)
        );

        foreach ($books as $key => $value) {
            $book = new Book();
            $book->setTitle($value[0]);
            $book->setRating($value[1]);
            $manager->persist($book);
        }
        $manager->flush();
    }
}