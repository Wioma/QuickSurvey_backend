<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choice_Response
 *
 * @ORM\Table(name="choices_responses")
 * @ORM\Entity
 */
class Choice_response
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Choice", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $choice;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Response", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $response;


    /**
     * @var int
     *
     * @ORM\Column(name="numberOrder", type="integer", nullable=true)
     */
    private $numberOrder;


}