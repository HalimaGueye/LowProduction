<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supporters
 *
 * @ORM\Table(name="supporters", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C9A1E5E237E06", columns={"name"})})
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="quote", type="text", length=0, nullable=false)
     */
    private $quote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity=Picture::class, inversedBy="supporters")
     */
    private $picture;

    public function getPicture(): ?Picture
    {
        return $this->picture;
    }

    public function setPicture(?Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }


}
