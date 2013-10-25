<?php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Irvyne\PortfolioBundle\Entity\Project;

class LoadProjectData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $projectTest = new Project();
        $projectTest->setTitle('Projet Test');
        $projectTest->setContent('Lorem ipsum set dolor amet');
        $projectTest->setEnabled(true);

        $manager->persist($projectTest);
        $manager->flush();
    }
}