<?php

namespace TplmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TplmBundle\Entity\Survey;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class SurveyController extends Controller
{

    /**
     * @Rest\Get(path="/api/survey/{id}", name="quickSurvey_get_survey", options={ "method_prefix" = false }, requirements={"id"="\d+"})
     * @Rest\View()
     * @ParamConverter("survey", class="TplmBundle:Survey")
     */
    public function getSurveyAction(Survey $survey = null)
    {
        if (!$survey) {
            return array("message" => "Enquete non trouvee");
        }
        return $survey;
    }

    /**
     * @Rest\Get(path="/api/surveys", name="quickSurvey_get_surveys", options={ "method_prefix" = false })
     * @Rest\View()
     */
    public function getSurveysAction()
    {
        $em = $this->getDoctrine()->getManager();

        $surveys = $em->getRepository('TplmBundle:Survey')->findAll();
        if (!$surveys) {
            array("message" => "Pas d'enquetes");
        }
        return $surveys;
    }
}