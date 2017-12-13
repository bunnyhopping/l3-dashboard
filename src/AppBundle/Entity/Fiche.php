<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheRepository")
 */
class Fiche
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
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="projet",inversedBy="fiches")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Manager", inversedBy="fiches")
     * @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     */
    private $manager;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ficheDate", type="date")
     */
    private $ficheDate;

    /**
     * @var float
     *
     * @ORM\Column(name="nbDayDone", type="float")
     * @Assert\GreaterThan(0)
     */
    private $nbDayDone;

    /**
     * @var float
     *
     * @ORM\Column(name="nbDaySold", type="float")
     */
    private $nbDaySold;

    /**
     * @var float
     *
     * @ORM\Column(name="progression", type="float")
     */
    private $progression;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * Set projectName
     *
     * @param string $projectName
     *
     * @return Fiche
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    /**
     * Set ficheDate
     *
     * @param \DateTime $ficheDate
     *
     * @return Fiche
     */
    public function setFicheDate($ficheDate)
    {
        $this->ficheDate = $ficheDate;

        return $this;
    }

    /**
     * Get ficheDate
     *
     * @return \DateTime
     */
    public function getFicheDate()
    {
        return $this->ficheDate;
    }

    /**
     * Set nbDayDone
     *
     * @param float $nbDayDone
     *
     * @return Fiche
     */
    public function setNbDayDone($nbDayDone)
    {
        $this->nbDayDone = $nbDayDone;

        return $this;
    }

    /**
     * Get nbDayDone
     *
     * @return float
     */
    public function getNbDayDone()
    {
        return $this->nbDayDone;
    }

    /**
     * Set nbDaySold
     *
     * @param float $nbDaySold
     *
     * @return Fiche
     */
    public function setNbDaySold($nbDaySold)
    {
        $this->nbDaySold = $nbDaySold;

        return $this;
    }

    /**
     * Get nbDaySold
     *
     * @return float
     */
    public function getNbDaySold()
    {
        return $this->nbDaySold;
    }

    /**
     * Set progression
     *
     * @param float $progression
     *
     * @return Fiche
     */
    public function setProgression($progression)
    {
        $this->progression = $progression;

        return $this;
    }

    /**
     * Get progression
     *
     * @return float
     */
    public function getProgression()
    {
        return $this->progression;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Fiche
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

