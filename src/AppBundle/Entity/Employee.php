<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21.06.2018
 * Time: 15:53
 */

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Employee
 * @package AppBundle\Entity
 * @ORM\Entity()
 */
class Employee extends User
{
    /**
     * @var string|null
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Заполните должность")
     */
    protected $position;

    /**
     * @var ArrayCollection|Subject[]
     * @ORM\ManyToMany(targetEntity="Subject")
     *
     */
    protected $subjects;

    /**
     * @var University|null
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\University")
     */
    protected $university;

    /**
     * @return null|string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param null|string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return Subject[]|ArrayCollection
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param Subject[]|ArrayCollection $subjects
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }

    /**
     * @return University|null
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * @param University|null $university
     */
    public function setUniversity(University $university)
    {
        $this->university = $university;
    }

    public function __toString()
    {
        return $this->position;
    }
}