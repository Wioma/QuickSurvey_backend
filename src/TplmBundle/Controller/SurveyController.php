<?php

namespace TplmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TplmBundle\Entity\Survey;
use TplmBundle\Entity\User_account;
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
     * @Rest\Get(path="/api/user/{id}/surveys", name="quickSurvey_get_surveysByUser", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("user", class="TplmBundle:User_account")
     */
    public function getSurveysByUserAction(User_account $user=null)
    {
        $em = $this->getDoctrine()->getManager();

        $surveys = $em->getRepository('TplmBundle:Survey')->findByAuthor($user);
        if (isset($surveys)) {
            array("message" => "Aucune enquete");
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

        $survey = $em->getRepository('TplmBundle:Survey')->findByLabel($request->get('label'));

        if ($survey) {
            return array("message" => "Cette enquête existe déjà");
        } else {

           $survey = new Survey;

           $survey->setLabel($request->get('label'));
           $survey->setDateCreated(new \DateTime());
           $survey->setDateStart(new \DateTime($request->get('dateStart')));
           $survey->setDateEnd(new \DateTime($request->get('dateEnd')));
           $survey->setIsActive((false));

           if($user){
            $survey->setAuthor($user);
           };

          $em->persist($survey);
          $em->flush();

          return $survey;
        }

    }

/*
    /**
     * @Rest\Post(path="/api/user/{id}/survey", name="quickSurvey_post_survey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("user", class="TplmBundle:User_account")
     * @ParamConverter("newSurvey", converter="fos_rest.request_body")
     */
/*  public function postSurveyAction(User_account $user, Survey $newSurvey)
    {
        $em = $this->getDoctrine()->getManager();

        $newSurvey->setDateCreated(new \DateTime());
        $newSurvey->setIsActive((false));

        foreach ($newSurvey->getPersons() as $value){

            $person = $em->getRepository('TplmBundle:Person')->find($value->getId());
            $newSurvey->removePerson($value);
            $newSurvey->addPerson($person);
        }

        if($user){
            $newSurvey->setAuthor($user);
        };



        $em->persist($newSurvey);
        $em->flush();

        return array("message" => "Enquete creee");
    }
*/
    /**
     * @Rest\Put(path="/api/survey/{id}", name="quickSurvey_put_survey", options={ "method_prefix" = false })
     * @Rest\View()
     * @ParamConverter("survey", class="TplmBundle:Survey")
     */
    public function putSurveyAction(Request $request, Survey $surveyUpdate, $id)
    {
        $em = $this->getDoctrine()->getManager();

         $survey = $em->getRepository('TplmBundle:Survey')->findById($id);

        if($survey && $surveyUpdate) {

           /*$survey->setLabel($surveyUpdate->getLabel());
           $survey->setDateCreated($surveyUpdate->getDateCreated());
           $survey->setDateStart($surveyUpdate->getDateStart());
           $survey->setDateEnd($surveyUpdate->getDateEnd());
           $survey->setIsActive((false));*/

            //voir pour ajouter des persons

            $em->merge($surveyUpdate);
            $em->flush();

            return $survey;
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