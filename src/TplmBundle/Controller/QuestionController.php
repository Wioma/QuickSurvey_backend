<?php

namespace TplmBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TplmBundle\Entity\Question;
use TplmBundle\Entity\Survey;
use TplmBundle\Entity\Choice;

use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use TplmBundle\Entity\Survey_Question;

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
        if (!isset($questions)) {
            array("message" => "Pas de questions");
        }
        return $questions;
    }

    /**
     * @Rest\Get(path="/api/survey/{id}/questions", name="quickSurvey_get_questionsBySurvey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("survey", class="TplmBundle:Survey")
     */
    public function getQuestionsBySurveyAction(Survey $survey)
    {
        $em = $this->getDoctrine()->getManager();

        $surveyQuestions = $em->getRepository('TplmBundle:Survey_Question')->findBySurvey($survey);
        if (!isset($surveyQuestions)) {
            array("message" => "Pas de questions pour cette etude.");
        }
        return $surveyQuestions;
    }

    /**
     * @Rest\Post(path="/api/survey/{id}/question", name="quickSurvey_post_newquestionBySurvey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("survey", class="TplmBundle:Survey")
     * @ParamConverter("question", converter="fos_rest.request_body")
     */
    public function postNewQuestionBySurveyAction(Survey $survey=null, Question $question)
    {
        $em = $this->getDoctrine()->getManager();

        if(!$question)
        {
            return array("message"=>"Aucune question creee.");
        }

        $em->persist($question);
        $em->flush();

        $surveyLastQuestion = $em->getRepository('TplmBundle:Survey_Question')->findOneBy(array("survey"=>$survey), array("number"=>"desc"),1);
        $lastNumber=$surveyLastQuestion->getNumber();

        $surveyQuestion = new Survey_Question($survey,$question,$lastNumber+1);

        $em->persist($surveyQuestion);
        $em->flush();

        return array("message"=>"Question n°".$surveyQuestion->getNumber(). " creee.");
    }

    /**
     * @Rest\Post(path="/api/survey/{id}/questions", name="quickSurvey_post_newquestionBySurvey", options={ "method_prefix" = false })
     * @Rest\View()
      */
    public function postQuestionsBySurveyAction(Request $request, $id)
    {
        //$question = array(Question);
        $questions = $request->get('questions');
        $em = $this->getDoctrine()->getManager();
        $survey = $em->getRepository('TplmBundle:Survey')->findById($id);

        if (!$survey) {
           return array("message"=>"Enquête inconnue");
        } else {
            if(!$questions)
            {
             return array("message"=>"Aucune question creee.");
            }
            foreach($questions as $key=>$question) {
               
                $questionAcreer = new Question($question['label'],$question['maxAnswer'],$question['hasOrder'],$question['isMultiSelect']);
               
                foreach($question['choices'] as $value){
                    $choice = new Choice($value['label']);   
                    $choiceExistant = $em->getRepository('TplmBundle:Choice')->findByLabel($choice->getLabel());
                    if(!$choiceExistant) {
                        $em->persist($choice); 
                       
                        $em->flush();
                        $questionAcreer->addChoice($choice);
                    } else {
                        $questionAcreer->addChoice($choiceExistant[0]);
                    }
                }
            
               $questionExistante =  $em->getRepository('TplmBundle:Question')->findByLabel($questionAcreer->getLabel());
                if (!$questionExistante) { 
                   
                   $em->persist($questionAcreer);        
                   $em->flush();
                } else {
                  
                  $questionAcreer->setId($questionExistante[0]->getId());
                  $em->merge($questionAcreer);        
                  $em->flush();
                }

                $surveyQuestion = new Survey_Question($survey[0],$questionAcreer,$key+1);

                $surveyQuestionExistante = $em->getRepository('TplmBundle:Survey_Question')->findBy(
                    array ('survey' => $survey, "question" => $questionAcreer));
               
                if(!$surveyQuestionExistante) {
                    $em->persist($surveyQuestion);
                } else {
                  $surveyQuestion->setId($surveyQuestionExistante[0]->getId());
                  $em->merge($surveyQuestion);
                }
               
            }
            $em->flush();

        }
    }
    /**
     * @Rest\Post(path="/api/survey/{id}/question/{question_id}", name="quickSurvey_post_questionBySurvey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("survey", class="TplmBundle:Survey")
     * @ParamConverter("question", class="TplmBundle:Question", options={"id" = "question_id"})
     */
    public function postExistingQuestionBySurveyAction(Survey $survey=null, Question $question=null)
    {
        $em = $this->getDoctrine()->getManager();

        if ($survey!=null && $question!=null) {

            $surveyLastQuestion = $em->getRepository('TplmBundle:Survey_Question')->findOneBy(array("survey" => $survey), array("number" => "desc"));
            $lastNumber = $surveyLastQuestion->getNumber();

            $surveyQuestion = new Survey_Question($survey, $question, $lastNumber + 1);

            $em->persist($surveyQuestion);
            $em->flush();

            return array("message" => "Question n°" . $surveyQuestion->getNumber() . " creee.");
        }
    }
}