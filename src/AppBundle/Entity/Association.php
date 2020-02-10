<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AssociationRepository")
 */
class Association extends BaseUser
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
     * @Assert\Type("string")
     */
    private $displayName;

    /**
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    private $profilePic;

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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="association")
     */
    private $members;

    public function __construct()
    {
        parent::__construct();
        $this->members = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getMembers(): ArrayCollection
    {
        return $this->members;
    }

    public function addMember(User$member){
        $this->members->add($member);
    }
    public function removeMember(User $member)
    {
        $this->members->removeElement($member);
    }

}

