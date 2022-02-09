<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleProject
 *
 * @ORM\Table(name="role_project", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_937E75155E237E06", columns={"name"})})
 * @ORM\Entity
 */
class RoleProject
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    public $name;

    /**
     * @var string
     *
     * @ORM\Column(name="decsription", type="text", length=0, nullable=false)
     */
    public $decsription;


}
