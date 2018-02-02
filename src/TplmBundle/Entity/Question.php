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
     * @ORM\Column(name="hasOrder", type="boolean", nullable=true)
     */
    private $hasOrder;

    /**
     * @var \Boolean
     *
     * @ORM\Column(name="isMultiSelect", type="boolean", nullable=true)
     */
    private $isMultiSelect;

    /**
     * @ORM\ManyToMany(targetEntity="Choice")
     */
    private $choices;


    /**
     * Constructor
     */
    public function __construct($label,$maxAnswer,$hasOrder,$isMultiSelect)
    {
        $this->label=$label;
        $this->maxAnswer=$maxAnswer;
        $this->hasOrder=$hasOrder;
        $this->isMultiSelect=$isMultiSelect;
        $this->choices = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Question
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set maxAnswer
     *
     * @param integer $maxAnswer
     *
     * @return Question
     */
    public function setMaxAnswer($maxAnswer)
    {
        $this->maxAnswer = $maxAnswer;

        return $this;
    }

    /**
     * Get maxAnswer
     *
     * @return integer
     */
    public function getMaxAnswer()
    {
        return $this->maxAnswer;
    }

    /**
     * Set hasOrder
     *
     * @param boolean $hasOrder
     *
     * @return Question
     */
    public function setHasOrder($hasOrder)
    {
        $this->hasOrder = $hasOrder;

        return $this;
    }

    /**
     * Get hasOrder
     *
     * @return boolean
     */
    public function getHasOrder()
    {
        return $this->hasOrder;
    }

    /**
     * Set isMultiSelect
     *
     * @param boolean $isMultiSelect
     *
     * @return Question
     */
    public function setIsMultiSelect($isMultiSelect)
    {
        $this->isMultiSelect = $isMultiSelect;

        return $this;
    }

    /**
     * Get isMultiSelect
     *
     * @return boolean
     */
    public function getIsMultiSelect()
    {
        return $this->isMultiSelect;
    }

    /**
     * Add choice
     *
     * @param \TplmBundle\Entity\Choice $choice
     *
     * @return Question
     */
    public function addChoice(Choice $choice)
    {
        $this->choices[] = $choice;

        return $this;
    }

    /**
     * Remove choice
     *
     * @param \TplmBundle\Entity\Choice $choice
     */
    public function removeChoice(Choice $choice)
    {
        $this->choices->removeElement($choice);
    }

    /**
     * Get choices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChoices()
    {
        return $this->choices;
    }
}
