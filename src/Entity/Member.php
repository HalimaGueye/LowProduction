<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 *
 * @ORM\Table(name="member")
 * @ORM\Entity
 */
class Member
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
     * @ORM\Column(name="courriel", type="string", length=255, nullable=false)
     */
    private $courriel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_portfolio", type="string", length=255, nullable=true)
     */
    private $urlPortfolio;

    /**
     * @ORM\ManyToOne(targetEntity=Picture::class, inversedBy="member")
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity=MemberArticle::class, mappedBy="member")
     */
    private $memberArticles;

    /**
     * @ORM\ManyToOne(targetEntity=MemberType::class, inversedBy="members")
     * @ORM\JoinColumn(nullable=false)
     */
    private $memberType;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="member", cascade={"persist", "remove"})
     */
    private $user;

    public function __construct()
    {
        $this->memberArticles = new ArrayCollection();
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

    /**
     * @return Collection|MemberArticle[]
     */
    public function getMemberArticles(): Collection
    {
        return $this->memberArticles;
    }

    public function addMemberArticle(MemberArticle $memberArticle): self
    {
        if (!$this->memberArticles->contains($memberArticle)) {
            $this->memberArticles[] = $memberArticle;
            $memberArticle->setMember($this);
        }

        return $this;
    }

    public function removeMemberArticle(MemberArticle $memberArticle): self
    {
        if ($this->memberArticles->removeElement($memberArticle)) {
            // set the owning side to null (unless already changed)
            if ($memberArticle->getMember() === $this) {
                $memberArticle->setMember(null);
            }
        }

        return $this;
    }

    public function getMemberType(): ?MemberType
    {
        return $this->memberType;
    }

    public function setMemberType(?MemberType $memberType): self
    {
        $this->memberType = $memberType;

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
