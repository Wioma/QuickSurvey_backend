<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="label", type="string", length=255, unique=true)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="maxAnswer", type="integer", nullable=true)
     */
    private $maxAnswer;

    /**
     * @var \Boolean
     *
     * @ORM\Column(name="hasOrder", type="boolean", nullable=false)
     */
    private $hasOrder;

    /**
     * @var \Boolean
     *
     * @ORM\Column(name="isMultiSelect", type="boolean", nullable=false)
     */
    private $isMultiSelect;


    /**
     * @ORM\ManyToMany(targetEntity="Choice")
     */
    private $choices;



}