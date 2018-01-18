<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Response
 *
 * @ORM\Table(name="responses", uniqueConstraints={@ORM\UniqueConstraint(name="unique_trio", columns={"survey_id", "question_id","person_id"})})
 * @ORM\Entity
 */
class Response
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id", nullable=false)
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id", nullable=false)
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="Survey", cascade={"remove"})
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id", nullable=false)
     */
    private $survey;





}