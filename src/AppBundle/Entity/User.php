<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


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
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    private $profilePic;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Association", inversedBy="fos_user")
     */
    private $association;

    public function getAssociation()
    {
        return $this->association;
    }

    public function setAssociation($association)
    {
        $this->association = $association;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }
}