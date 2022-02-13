<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supporters
 *
 * @ORM\Table(name="supporters", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C9A1E5E237E06", columns={"name"})}, indexes={@ORM\Index(name="IDX_C9A1E53B0CC1B", columns={"supporter_picture_id"})})
 * @ORM\Entity
 */
class Supporters
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
     * @ORM\Column(name="quote", type="text", length=255, nullable=false)
     */
    public $quote;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="text", length=255, nullable=false)
     */
    public $profession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    public $url;

    /**
     * @var \Picture
     *
     * @ORM\ManyToOne(targetEntity="Picture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supporter_picture_id", referencedColumnName="id")
     * })
     */
    public $supporterPicture;
}
