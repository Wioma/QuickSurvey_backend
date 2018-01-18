<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="persons")
 * @ORM\Entity
 */
class Person
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
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;


    /**
     * @ORM\ManyToMany(targetEntity="Response")
     */
    private $responses;

    /**
     * @ORM\ManyToMany(targetEntity="Survey")
     */
    private $surveys;


}