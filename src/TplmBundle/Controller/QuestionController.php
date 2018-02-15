<?php

namespace TplmBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TplmBundle\Entity\Question;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    /**
     * @Rest\Get(path="/api/questions", name="quickSurvey_get_questions", options={ "method_prefix" = false })
     * @Rest\View()
     */
    public function getQuestionsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository('TplmBundle:Question')->findAll();
        if (isset($questions)) {
            array("message" => "Pas de questions");
        }
        return $questions;
    }
}