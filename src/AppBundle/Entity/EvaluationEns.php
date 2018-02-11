<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluationEns
 *
 * @ORM\Table(name="evaluation_ens")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvaluationEnsRepository")
 */
class EvaluationEns
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
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="clarification", type="text")
     */
    private $clarification;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return EvaluationEns
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set clarification
     *
     * @param string $clarification
     *
     * @return EvaluationEns
     */
    public function setClarification($clarification)
    {
        $this->clarification = $clarification;

        return $this;
    }

    /**
     * Get clarification
     *
     * @return string
     */
    public function getClarification()
    {
        return $this->clarification;
    }
}

