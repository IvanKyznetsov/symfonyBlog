<?php
// src/AppBundle/Entity/User.php

namespace Blogger\BlogBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string", length=255)
     */
    protected $apiKey;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $stripe;

    /**
     * Set stripe
     *
     * @param string $stripe
     *
     * @return User
     */
    public function setStripe($stripe)
    {
        $this->stripe = $stripe;

        return $this;
    }

    /**
     * Get stripe
     *
     * @return string
     */
    public function getStripe()
    {
        return $this->stripe;
    }

    /**
     * Get apiKey
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function __construct()
    {
        parent::__construct();

        $this->apiKey = md5(uniqid());
    }

    /**
     * @return string
     */
    public function getRolesAsString()
    {
        $roles = array();
        foreach ($this->getRoles() as $role) {
            $role = explode('_', $role);
            array_shift($role);
            $roles[] = ucfirst(strtolower(implode(' ', $role)));
        }

        return implode(', ', $roles);
    }

//    /**
//     * Returns the username used to authenticate the user.
//     *
//     * @return string The username
//     */
//    public function getUsername()
//    {
//        return $this->username;
//    }

//    /**
//     * @param UserInterface $user
//     *
//     * @return bool
//     */
//    public function isEqualTo(UserInterface $user)
//    {
//        return $user->getUsername() == $this->username;
//    }

//    /**
//     * Get lock status
//     *
//     * @return boolean
//     */
//    public function getLocked()
//    {
//        return $this->locked;
//    }
//
//    public function checkPreAuth(UserInterface $user)
//    {
//
//        //Test for companylock...
//        if (!$user->getCompany()->getActive()) {
//            throw new LockedException('The company of this user is locked.', $user);
//        }
//
//        if ($user->getLocked()) {
//            throw new LockedException('The admin of this company has locked this user.', $user);
//        }
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function checkPostAuth(UserInterface $user)
//    {
//
//        //Test for companylock...
//        if (!$user->getCompany()->getActive()) {
//            throw new LockedException('The company of this user is locked.', $user);
//        }
//
//        if ($user->getLocked()) {
//            throw new LockedException('The admin of this company has locked this user.', $user);
//        }
//    }
}
