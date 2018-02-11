<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoyennesMatieres
 *
 * @ORM\Table(name="moyennes_matieres")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MoyennesMatieresRepository")
 */
class MoyennesMatieres
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
     * @var int
     *
     * @ORM\Column(name="noteCC", type="integer")
     */
    private $noteCC;

    /**
     * @var int
     *
     * @ORM\Column(name="noteEx", type="integer")
     */
    private $noteEx;

    /**
     * @var int
     *
     * @ORM\Column(name="moyenne", type="integer")
     */
    private $moyenne;


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
     * Set noteCC
     *
     * @param integer $noteCC
     *
     * @return MoyennesMatieres
     */
    public function setNoteCC($noteCC)
    {
        $this->noteCC = $noteCC;

        return $this;
    }

    /**
     * Get noteCC
     *
     * @return int
     */
    public function getNoteCC()
    {
        return $this->noteCC;
    }

    /**
     * Set noteEx
     *
     * @param integer $noteEx
     *
     * @return MoyennesMatieres
     */
    public function setNoteEx($noteEx)
    {
        $this->noteEx = $noteEx;

        return $this;
    }

    /**
     * Get noteEx
     *
     * @return int
     */
    public function getNoteEx()
    {
        return $this->noteEx;
    }

    /**
     * Set moyenne
     *
     * @param integer $moyenne
     *
     * @return MoyennesMatieres
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return int
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }
}

