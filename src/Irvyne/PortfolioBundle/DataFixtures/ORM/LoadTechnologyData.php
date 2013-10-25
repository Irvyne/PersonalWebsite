<?php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Irvyne\PortfolioBundle\Entity\Technology;

class LoadTechnologyData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $technologyPhp = new Technology();
        $technologyPhp->setName('PHP');
        $technologyPhp->setDescription('Lipsum');
        $manager->persist($technologyPhp);

        $technologyHtml = new Technology();
        $technologyHtml->setName('HTML');
        $technologyHtml->setDescription('Lipsum');
        $manager->persist($technologyHtml);

        $technologyCss = new Technology();
        $technologyCss->setName('CSS');
        $technologyCss->setDescription('Lipsum');
        $manager->persist($technologyCss);

        $manager->flush();
    }
}