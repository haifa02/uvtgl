<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\Message as BaseMessage;
use Doctrine\Common\Collections\Collection;

/**
 * Message
 *
 * @ORM\Table(name="messageo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Messageo 
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
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=255)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Etudiant",inversedBy="id")
     * @ORM\JoinColumn(name="etudiant",referencedColumnName="id",onDelete="CASCADE")
     */
    private $etudiant;
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enseignant",inversedBy="id")
     * @ORM\JoinColumn(name="enseignant",referencedColumnName="id",onDelete="CASCADE")
     */
    private $enseignant;
    
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }
    public function getEtudiant()
    {

        return $this->etudiant;
    }
    
    public function setEnseignant($enseignant)
    {
        $this->enseignant = $enseignant;

        return $this;
    }
    public function getEnseignant()
    {

        return $this->enseignant;
    }
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
     * Set objet
     *
     * @param string $objet
     *
     * @return Message
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Message
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

