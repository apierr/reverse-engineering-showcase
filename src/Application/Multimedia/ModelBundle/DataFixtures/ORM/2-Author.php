<?php
// src/Appication/Multimedia/ModelBundle/DataFixtures/ORM/2-Author.php

namespace Application\Multimedia\ModelBundle\DataFixtures\ORM;

use Application\Multimedia\ModelBundle\Entity\Author;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixturesInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixture for the Author Entity
 */
class LoadAuthorData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $books = array(
            array('Antonio', 'Pierro'),
            array('Marco ', 'Verrati')
        );

        foreach ($books as $key => $value) {
            $author = new Author();
            $author->setFirstName($value[0]);
            $author->setLastName($value[1]);
            $manager->persist($author);
        }
        $manager->flush();
    }
}