<?php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Irvyne\PortfolioBundle\Entity\Client;

class LoadClientData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $clientTest = new Client();
        $clientTest->setName('BIJ');
        $clientTest->setDescription('BAP BIJ Levallois');

        $manager->persist($clientTest);
        $manager->flush();
    }
}