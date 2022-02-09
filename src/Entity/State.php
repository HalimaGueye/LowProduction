<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table(name="state", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_A393D2FB665648E9", columns={"color"}), @ORM\UniqueConstraint(name="UNIQ_A393D2FB5E237E06", columns={"name"})})
 * @ORM\Entity
 */
class State
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
