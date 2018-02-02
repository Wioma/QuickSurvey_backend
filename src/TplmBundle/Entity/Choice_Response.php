<?php

namespace TplmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choice_Response
 *
 * @ORM\Table(name="choice_response")
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

    /**
     * Choice_response constructor.
     * @param $choice
     * @param $response
     * @param int $numberOrder
     */
    public function __construct($choice, $response, $numberOrder)
    {
        $this->choice = $choice;
        $this->response = $response;
        $this->numberOrder = $numberOrder;
    }

    /**
     * @return mixed
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * @param mixed $choice
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * @return int
     */
    public function getNumberOrder()
    {
        return $this->numberOrder;
    }

    /**
     * @param int $numberOrder
     */
    public function setNumberOrder($numberOrder)
    {
        $this->numberOrder = $numberOrder;
    }




}