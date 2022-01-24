<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64986CC499D", columns={"pseudo"})})
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="pseudo", type="string", length=255, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity=Member::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $member;

    /**
     * @ORM\OneToMany(targetEntity=NewActuality::class, mappedBy="user")
     */
    private $newActuality;

    public function __construct()
    {
        $this->newActuality = new ArrayCollection();
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(?Member $member): self
    {
        // unset the owning side of the relation if necessary
        if ($member === null && $this->member !== null) {
            $this->member->setUser(null);
        }

        // set the owning side of the relation if necessary
        if ($member !== null && $member->getUser() !== $this) {
            $member->setUser($this);
        }

        $this->member = $member;

        return $this;
    }

    /**
     * @return Collection|NewActuality[]
     */
    public function getNewActuality(): Collection
    {
        return $this->newActuality;
    }

    public function addNewActuality(NewActuality $newActuality): self
    {
        if (!$this->newActuality->contains($newActuality)) {
            $this->newActuality[] = $newActuality;
            $newActuality->setUser($this);
        }

        return $this;
    }

    public function removeNewActuality(NewActuality $newActuality): self
    {
        if ($this->newActuality->removeElement($newActuality)) {
            // set the owning side to null (unless already changed)
            if ($newActuality->getUser() === $this) {
                $newActuality->setUser(null);
            }
        }

        return $this;
    }


}
