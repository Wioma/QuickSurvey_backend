<?php

namespace TplmBundle\DataFixtures\ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\RestBundle\Tests\Fixtures\User;
use TplmBundle\Entity\Choice;
use TplmBundle\Entity\Choice_response;
use TplmBundle\Entity\Survey;
use TplmBundle\Entity\Question;
use TplmBundle\Entity\Person;
use TplmBundle\Entity\Survey_question;
use TplmBundle\Entity\User_account;
use TplmBundle\Entity\Response;



class LoadData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $person1 = new Person("emailPerson1");
        $person2 = new Person("emailPerson2");
        $person3 = new Person("emailPerson3");
        $person4 = new Person("emailPerson4");
        $person5 = new Person("emailPerson5");

        $listPersons= [$person1,$person2,$person3,$person4,$person5];

         foreach ($listPersons as $person){

             $manager->persist($person);
         }


        $user1 = new User_account("email1","password1","login1");
        $user2 = new User_account("email2","password2","login2");
        $user3 = new User_account("email3","password3","login3");
        $user4 = new User_account("email4","password4","login4");
        $user5 = new User_account("email5","password5","login5");

        $listUsers=[$user1,$user2,$user3,$user4,$user5];

        foreach ($listUsers as $user) {

            $manager->persist($user);
        }

        $question1 = new Question("Quel est le label de la question 1?",null,null,null);
        $question2 = new Question("Quel est le label de la question 2?",4,false,true);
        $question3 = new Question("Quel est le label de la question 3?",2,false,true);
        $question4 = new Question("Quel est le label de la question 4?",3,true,true);
        $question5 = new Question("Quel est le label de la question 5?",null,false,false);
        $question6 = new Question("Quel est le label de la question 6?",null,null,null);
        $question7 = new Question("Quel est le label de la question 7?",null,false,false);
        $question8 = new Question("Quel est le label de la question 8?",4,true,true);
        $question9 = new Question("Quel est le label de la question 9?",null,false,false);
        $question10 = new Question("Quel est le label de la question 10?",null,null,null);

        $choice1=new Choice("Choix1");
        $choice2=new Choice("Choix2");
        $choice3=new Choice("Choix3");
        $choice4=new Choice("Choix4");
        $choice5=new Choice("Choix5");
        $choice6=new Choice("Choix6");
        $choice7=new Choice("Choix7");
        $choice8=new Choice("Choix8");
        $choice9=new Choice("Choix9");
        $choice10=new Choice("Choix10");
        $choice11=new Choice("Choix11");
        $choice12=new Choice("Choix12");
        $choice13=new Choice("Choix13");
        $choice14=new Choice("Choix14");
        $choice15=new Choice("Choix15");
        $choice16=new Choice("Choix16");
        $choice17=new Choice("Choix17");
        $choice18=new Choice("Choix18");
        $choice19=new Choice("Choix19");
        $choice20=new Choice("Choix20");

        $listChoices=[
            $choice1,
            $choice2,
            $choice3,
            $choice4,
            $choice5,
            $choice6,
            $choice7,
            $choice8,
            $choice9,
            $choice10,
            $choice11,
            $choice12,
            $choice13,
            $choice14,
            $choice15,
            $choice16,
            $choice17,
            $choice18,
            $choice19,
            $choice20
        ];

        foreach ($listChoices as $choice){

            $manager->persist($choice);
        }


        $question2->addChoice($choice1);
        $question2->addChoice($choice2);
        $question2->addChoice($choice3);
        $question2->addChoice($choice4);
        $question2->addChoice($choice5);

        $question3->addChoice($choice6);
        $question3->addChoice($choice7);
        $question3->addChoice($choice8);

        $question4->addChoice($choice9);
        $question4->addChoice($choice10);
        $question4->addChoice($choice11);
        $question4->addChoice($choice12);
        $question4->addChoice($choice13);

        $question8->addChoice($choice14);
        $question8->addChoice($choice15);
        $question8->addChoice($choice16);
        $question8->addChoice($choice17);
        $question8->addChoice($choice18);



        $listquestions=[$question1,$question2,$question3,$question4,$question5,$question6,$question7,$question8,$question9,$question10];

        foreach ($listquestions as $question){

            $manager->persist($question);
        }

        $survey1 = new Survey("Sondage 1",new \DateTime('2018-01-12'),new \DateTime('2018-05-05'),new \DateTime('2018-05-30'),false,$user1);
        $survey2 = new Survey("Sondage 2",new \DateTime('2018-01-08'),new \DateTime('2018-05-15'),new \DateTime('2018-06-15'),true,$user2);
        $survey3 = new Survey("Sondage 3",new \DateTime('2018-01-23'),new \DateTime('2018-04-01'),new \DateTime('2018-05-01'),true,$user3);
        $survey4 = new Survey("Sondage 4",new \DateTime('2018-01-29'),new \DateTime('2018-03-15'),new \DateTime('2018-03-30'),false,$user1);
        $survey5 = new Survey("Sondage 5",new \DateTime('2018-01-30'),new \DateTime('2018-06-01'),new \DateTime('2018-07-15'),true,$user4);

        $survey1->addPerson($person1);
        $survey1->addPerson($person2);
        $survey2->addPerson($person3);
        $survey2->addPerson($person4);

        $listSurveys=[$survey1,$survey2,$survey3,$survey4,$survey5];

        foreach ($listSurveys as $survey){

            $manager->persist($survey);
        }


        $survey1Question1= new Survey_question($survey1,$question1,1);
        $survey1Question2= new Survey_question($survey1,$question2,2);
        $survey1Question3= new Survey_question($survey1,$question3,3);
        $survey1Question4= new Survey_question($survey1,$question4,4);
        $survey1Question5= new Survey_question($survey1,$question5,5);
        $survey2Question1= new Survey_question($survey2,$question6,1);
        $survey2Question2= new Survey_question($survey2,$question7,2);
        $survey2Question3= new Survey_question($survey2,$question8,3);
        $survey2Question4= new Survey_question($survey2,$question9,4);
        $survey2Question5= new Survey_question($survey2,$question10,5);
        $survey3Question1= new Survey_question($survey3,$question1,1);
        $survey3Question2= new Survey_question($survey3,$question3,2);
        $survey3Question3= new Survey_question($survey3,$question5,3);
        $survey3Question4= new Survey_question($survey3,$question7,4);
        $survey3Question5= new Survey_question($survey3,$question9,5);
        $survey4Question1= new Survey_question($survey4,$question2,1);
        $survey4Question2= new Survey_question($survey4,$question4,2);
        $survey4Question3= new Survey_question($survey4,$question6,3);
        $survey4Question4= new Survey_question($survey4,$question8,4);
        $survey4Question5= new Survey_question($survey4,$question10,5);
        $survey5Question1= new Survey_question($survey5,$question4,1);
        $survey5Question2= new Survey_question($survey5,$question9,2);
        $survey5Question3= new Survey_question($survey5,$question2,3);
        $survey5Question4= new Survey_question($survey5,$question7,4);
        $survey5Question5= new Survey_question($survey5,$question6,5);

        $listSurveyQuestions=[
            $survey1Question1,
            $survey1Question2,
            $survey1Question3,
            $survey1Question4,
            $survey1Question5,
            $survey2Question1,
            $survey2Question2,
            $survey2Question3,
            $survey2Question4,
            $survey2Question5,
            $survey3Question1,
            $survey3Question2,
            $survey3Question3,
            $survey3Question4,
            $survey3Question5,
            $survey4Question1,
            $survey4Question2,
            $survey4Question3,
            $survey4Question4,
            $survey4Question5,
            $survey5Question1,
            $survey5Question2,
            $survey5Question3,
            $survey5Question4,
            $survey5Question5
        ];

        foreach ($listSurveyQuestions as $surveyQuestion){

            $manager->persist($surveyQuestion);
        }

        $response1 = new Response("Je suis la reponse 1",$person1,$question1,$survey1);
        $response2 = new Response("Je suis la reponse 2",$person1,$question5,$survey1);
        $response3 = new Response("Je suis la reponse 3",$person3,$question6,$survey2);
        $response4 = new Response("Je suis la reponse 4",$person3,$question7,$survey2);
        $response5 = new Response("Je suis la reponse 5",$person1,$question9,$survey2);
        $response6 = new Response("Je suis la reponse 6",$person2,$question1,$survey1);
        $response7 = new Response("Je suis la reponse 7",$person2,$question5,$survey1);
        $response8 = new Response("Je suis la reponse 8",$person4,$question6,$survey2);
        $response9 = new Response("Je suis la reponse 9",$person3,$question10,$survey2);
        $response10 = new Response("Je suis la reponse 10",$person4,$question7,$survey2);
        $response11 = new Response(null,$person1,$question2,$survey1);
        $response12 = new Response(null,$person2,$question3,$survey1);
        $response13 = new Response(null,$person1,$question4,$survey1);
        $response14 = new Response(null,$person3,$question8,$survey2);
        $response15 = new Response(null,$person4,$question8,$survey2);
        $response16 = new Response(null,$person1,$question3,$survey1);
        $response17 = new Response(null,$person2,$question4,$survey1);
        $response18 = new Response("Je suis la reponse 11",$person3,$question9,$survey2);
        $response19 = new Response("Je suis la reponse 12",$person4,$question10,$survey2);
        $response20 = new Response("Je suis la reponse 13",$person4,$question9,$survey2);
        $response21 = new Response(null,$person2,$question2,$survey1);


        $listResponses=[$response1,
            $response2,
            $response3,
            $response4,
            $response5,
            $response6,
            $response7,
            $response8,
            $response9,
            $response10,
            $response11,
            $response12,
            $response13,
            $response14,
            $response15,
            $response16,
            $response17,
            $response18,
            $response19,
            $response20,
            $response21
        ];

        foreach ($listResponses as $response){

            $manager->persist($response);
        }



        $choiceResponse1= new Choice_response($choice1,$response11,null);
        $choiceResponse2= new Choice_response($choice2,$response11,null);
        $choiceResponse3= new Choice_response($choice4,$response11,null);
        $choiceResponse4= new Choice_response($choice5,$response11,null);
        $choiceResponse5= new Choice_response($choice7,$response16,null);
        $choiceResponse6= new Choice_response($choice10,$response13,null);
        $choiceResponse7= new Choice_response($choice12,$response13,null);


        $choiceResponses=[

            $choiceResponse1,
            $choiceResponse2,
            $choiceResponse3,
            $choiceResponse4,
            $choiceResponse5,
            $choiceResponse6,
            $choiceResponse7
        ];

        foreach ($choiceResponses as $choiceResponse){

            $manager->persist($choiceResponse);
        }


        // On déclenche l'enregistrement de toutes les enquetes
        $manager->flush();
    }
}