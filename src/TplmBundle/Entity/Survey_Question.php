<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey_Question
 *
 * @ORM\Table(name="survey_question")
 * @ORM\Entity
 */
class Survey_question
{

    /**
     *
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Survey", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $survey;

    /**
     * @ORM\Id
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


}