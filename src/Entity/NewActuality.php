<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewActuality
 *
 * @ORM\Table(name="new_Actuality")
 * @ORM\Entity
 */
class NewActuality
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
     * @ORM\Column(name="article", type="text", length=0, nullable=false)
     */
    private $article;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication", type="date", nullable=false)
     */
    private $publication;

    /**
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="newActivity")
     */
    private $Project;

    /**
     * @ORM\ManyToOne(targetEntity=Picture::class, inversedBy="newActuality")
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="newActuality")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getProject(): ?Project
    {
        return $this->Project;
    }

    public function setProject(?Project $Project): self
    {
        $this->Project = $Project;

        return $this;
    }

    public function getPicture(): ?Picture
    {
        return $this->picture;
    }

    public function setPicture(?Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
