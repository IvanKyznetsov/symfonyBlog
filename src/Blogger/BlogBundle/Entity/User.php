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

    public function __construct()
    {
        parent::__construct();
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
}
