<?php

namespace TplmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TplmBundle\Entity\Survey;
use TplmBundle\Entity\User;


class LoadSurvey implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $surveys = array(
            array("label"=>'Sondage 1',
                "dateStart"=>new \DateTime('2018-05-05'),
                "dateEnd"=>new \DateTime('2018-05-10'),
                "dateCreated"=>new \DateTime('2018-01-12'),
                "isActive"=>false),
            array("label"=>'Sondage 2',
                "dateStart"=>new \DateTime('2018-02-05'),
                "dateEnd"=>new \DateTime('2018-02-20'),
                "dateCreated"=>new \DateTime('2018-01-08'),
                "isActive"=>false),
            array("label"=>'Sondage 3',
                "dateStart"=>new \DateTime('2018-03-02'),
                "dateEnd"=>new \DateTime('2018-04-02'),
                "dateCreated"=>new \DateTime('2018-01-18'),
                "isActive"=>true)
        );


        foreach ($surveys as $survey) {

            $survey = new Survey();
            $survey->setLabel($survey["label"]);
            $survey->setDateStart($survey["dateStart"]);
            $survey->setDateEnd($survey["dateEnd"]);
            $survey->setDateCreated($survey["dateCreated"]);
            $survey->setIsActive($survey["isActive"]);

            // On la persiste
            $manager->persist($survey);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}