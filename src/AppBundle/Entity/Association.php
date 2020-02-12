<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Association
 *
 * @ORM\Table(name="associations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AssociationRepository")
 */
class Association
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\Type("string")
     */
    private $displayName;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="associations")
     */
    private $members;

    /**
     * @param ArrayCollection $members
     */
    public function setMembers(ArrayCollection $members): void
    {
        $this->members = $members;
    }

    public function __construct()
    {
        $this->members = new ArrayCollection();
    }

    public function addMember(?User $user){
        $this->members->add($user);
    }

    public function removeMember(?User $user){
        $this->members->removeElement($user);
    }

    /**
     * @return Collection|User[]
     */
    public function getMembers(): Collection
    {
        return $this->members;
    }

    /**
     * @ORM\Column(type="string")
     * @Assert\Type("string")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 1000,
     *     minHeight = 200,
     *     maxHeight = 1000
     * )
     */
    private $profilePic;

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param mixed $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return mixed
     */
    public function getProfilePic()
    {
        return $this->profilePic;
    }

    /**
     * @param mixed $profilePic
     */
    public function setProfilePic(File $profilePic)
    {
        $this->profilePic = $profilePic;
    }



    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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

}

