<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberType
 *
 * @ORM\Table(name="member_type", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_70567B75665648E9", columns={"color"}), @ORM\UniqueConstraint(name="UNIQ_70567B755E237E06", columns={"name"})})
 * @ORM\Entity
 */
class MemberType
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
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     */
    public $color;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    public $name;


}
