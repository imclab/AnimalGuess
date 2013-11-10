<?php

namespace tr\animalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 */
class Animal
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $question;

    /**
     * @var integer
     */
    private $yBranch;

    /**
     * @var integer
     */
    private $nBranch;

    /**
     * Set id
     */
    public function setId($aID)
    {
        $this->id=$aID;
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
     * Set question
     *
     * @param string $question
     * @return Animal
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set yBranch
     *
     * @param integer $yBranch
     * @return Animal
     */
    public function setYBranch($yBranch)
    {
        $this->yBranch = $yBranch;

        return $this;
    }

    /**
     * Get yBranch
     *
     * @return integer 
     */
    public function getYBranch()
    {
        return $this->yBranch;
    }

    /**
     * Set nBranch
     *
     * @param integer $nBranch
     * @return Animal
     */
    public function setNBranch($nBranch)
    {
        $this->nBranch = $nBranch;

        return $this;
    }

    /**
     * Get nBranch
     *
     * @return integer 
     */
    public function getNBranch()
    {
        return $this->nBranch;
    }

}