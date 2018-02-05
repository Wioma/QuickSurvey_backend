<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey_Question
 *
 * @ORM\Table(name="survey_question")
 * @ORM\Entity
 */
class Survey_Question
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Survey", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $survey;

    /**
     * @ORM\ManyToOne(targetEntity="Question", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;





    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number;

    /**
     * Survey_question constructor.
     * @param $survey
     * @param $question
     * @param int $number
     */
    public function __construct($survey, $question, $number)
    {
        $this->survey = $survey;
        $this->question = $question;
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * @param mixed $survey
     */
    public function setSurvey($survey)
    {
        $this->survey = $survey;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }




}