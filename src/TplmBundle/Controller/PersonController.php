<?php

namespace TplmBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TplmBundle\Entity\Survey;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class PersonController extends Controller
{
    /**
     * @Rest\Get(path="/api/survey/{id}/persons", name="quickSurvey_get_personsBySurvey", options={ "method_prefix" = false })
     * @ParamConverter("survey", class="TplmBundle:Survey")
     * @Rest\View()
     */
    public function getPersonsBySurveyAction(Survey $survey=null)
    {
        $persons=$survey->getPersons();
        if (isset($persons)){
            return array("message" => "Pas de personnes associees a cette enquete");
        }
        return $persons;
    }

    /**
     * @Rest\Get(path="/api/persons", name="quickSurvey_get_persons", options={ "method_prefix" = false })
     * @Rest\View()
     */
    public function getPersonsAction(){

        $em = $this->getDoctrine()->getManager();

        $persons = $em->getRepository('TplmBundle:Person')->findAll();
        if (isset($persons)) {
            array("message" => "Pas d'enquetes");
        }
        return $persons;

    }

}