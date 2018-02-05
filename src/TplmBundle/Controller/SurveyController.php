<?php

namespace TplmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TplmBundle\Entity\Survey;
use TplmBundle\Entity\User_account;
use TplmBundle\Entity\Survey_question;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;


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
        if (isset($surveys)) {
            array("message" => "Pas d'enquetes");
        }
        return $surveys;
    }

    /**
     * @Rest\Post(path="/api/user/{id}/survey", name="quickSurvey_post_survey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("user", class="TplmBundle:User_account")
     */
    public function postSurveyAction(Request $request, User_account $user)
    {
        $em = $this->getDoctrine()->getManager();

        $survey = new Survey();

        $survey->setLabel($request->get('label'));
        $survey->setDateCreated(new \DateTime());
        $survey->setDateStart($request->get('dateCreated'));
        $survey->setDateEnd($request->get('dateEnd'));
        $survey->setIsActive((false));

        $persons = $request->get('persons');

        foreach ($persons as $value){

            $person = $em->getRepository('TplmBundle:Person')->find($value['id']);
            $survey->addPerson($person);
        }

        if($user){
            $survey->setAuthor($user);
        };

        $em->persist($survey);
        $em->flush();

        return array("message" => "Enquete creee");
    }

    /**
     * @Rest\Put(path="/api/survey/{id}", name="quickSurvey_put_survey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("survey", class="TplmBundle:Survey")
     */
    public function putSurveyAction(Request $request, Survey $survey=null)
    {
        $em = $this->getDoctrine()->getManager();

        if($survey) {

            $survey->setLabel($request->get('label'));
            $survey->setDateCreated(new \DateTime());
            $survey->setDateStart($request->get('dateCreated'));
            $survey->setDateEnd($request->get('dateEnd'));
            $survey->setIsActive((false));

            //voir pour ajouter des persons

            $em->persist($survey);
            $em->flush();

            return array("message" => "Enquete modifiee");
        }
    }


    /**
     * @Rest\Delete(path="/api/survey/{id}", name="quickSurvey_delete_survey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("survey", class="TplmBundle:Survey")
     */
    public function deleteSurveyAction(Survey $survey=null)
    {
        $em = $this->getDoctrine()->getManager();

        if ($survey) {

            $surveyQuestions= $em->getRepository('TplmBundle:Survey_Question')->findBySurvey($survey);
            foreach($surveyQuestions as $surveyQuestion){
                $em->remove($surveyQuestion);
            }

            $surveyResponses = $em->getRepository('TplmBundle:Response')->findBySurvey($survey);

            foreach ($surveyResponses as $response) {

                $responseChoices = $em->getRepository('TplmBundle:Choice_Response')->findByResponse($response);
                foreach ($responseChoices as $responseChoice) {
                    $em->remove($responseChoice);
                }
            }

            $responses = $em->getRepository('TplmBundle:Response')->findBySurvey($survey);
            foreach($responses as $response){
                $em->remove($response);
            }

            $em->remove($survey);
            $em->flush();

            return array("message" => "Enquete supprimee");
        }
    }



}