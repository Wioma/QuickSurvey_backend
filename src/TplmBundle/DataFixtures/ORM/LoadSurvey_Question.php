<?php

namespace TplmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\RestBundle\Tests\Fixtures\User;
use TplmBundle\Entity\Survey;
use TplmBundle\Entity\Question;


class LoadSurvey_Question implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {

    }
}