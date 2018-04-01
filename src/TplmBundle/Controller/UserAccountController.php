<?php

namespace TplmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TplmBundle\Entity\User_account;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;


class UserAccountController extends Controller
{
  /**
     * @Rest\GET(path="/api/user/{username}/{password}", name="quickSurvey_get_user", options={ "method_prefix" = false })
     * @Rest\View()
     */
    public function getUserAccountAction($username, $password){


        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('TplmBundle:User_account')->findOneBy(array("login" => $username));

        if ($user) {
            //verification mot de passe
            $pwd = $user->getPassword();

            if (strcmp($pwd,$password) !== 0) {
               return array("message" => "Le mot de passe est incorrect");
            } else {
               return $user;
            }
         }

        //user inconnu
        return array("message" => "L'identifiant est inconnu");

    }

    /**
     * @Rest\POST(path = "/api/user",
     *       name = "quickSurvey_create_user", options={ "method_prefix" = false }
     * )
     * @Rest\View()
     * @ParamConverter("newUser", converter="fos_rest.request_body")
     */
    public function createUserAccountAction(User_account $newUser){

        $em = $this->getDoctrine()->getManager();

        if ($newUser) {

              /*$newUser->setLogin($request->get('login'));
              $newUser->setPassword($request->get('password'));
              $newUser->setEmail($request->get('email'));*/

        // Verification existence username
        $user = $em->getRepository('TplmBundle:User_account')->findOneBy(array("login" => $newUser->getLogin()));

        if ($user) {
            //Erreur user existe deja
             return array("message" => "Le user ".$newUser->getLogin()." existe deja");
        }
        else {

            // Verification doublon email
            $verifEmail = $em->getRepository('TplmBundle:User_account')->findOneBy(array("email" => $newUser->getEmail()));
            if ($verifEmail) {
                //Erreur user existe deja
                 return array("message" => "L'email est déja utilisé par un autre utilisateur");
            } else {
                //Sinon creation de l'utilisateur
                $em->persist($newUser);
            }
        }

        $em->flush();

        return ($newUser);
        } else {
          return array("message" => "user obligatoire");
        }
    }
}