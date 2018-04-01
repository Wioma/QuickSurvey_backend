<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table(name="survey")
 * @ORM\Entity
 */
class Survey
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="date", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var \Boolean
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User_account")
     */
    private $author;

    /**
     * @ORM\ManyToMany(targetEntity="Person")
     */
    private $persons;

    /**
     * Survey constructor.
     * @param string $label
     * @param \DateTime $dateCreated
     * @param \DateTime $dateStart
     * @param \DateTime $dateEnd
     * @param bool $isActive
     * @param $author
     */
   public function Survey($label, \DateTime $dateCreated, \DateTime $dateStart, \DateTime $dateEnd, $isActive, $author)
    {
        $this->label = $label;
        $this->dateCreated = $dateCreated;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->isActive = $isActive;
        $this->author = $author;
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
     * Set id
     *
     * @param integer $id
     *
     * @return Survey
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Survey
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Survey
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Survey
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Survey
     */
    public function setDateEnd( \DateTime $dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Survey
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set author
     *
     * @param \TplmBundle\Entity\User_account $author
     *
     * @return Survey
     */
    public function setAuthor(\TplmBundle\Entity\User_account $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \TplmBundle\Entity\User_account
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Add person
     *
     * @param \TplmBundle\Entity\Person $person
     *
     * @return Survey
     */
    public function addPerson(Person $person)
    {
        $this->persons[] = $person;

        return $this;
    }

    /**
     * Remove person
     *
     * @param \TplmBundle\Entity\Person $person
     */
    public function removePerson(Person $person)
    {
        $this->persons->removeElement($person);
    }

    /**
     * Get persons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersons()
    {
        return $this->persons;
    }
}
