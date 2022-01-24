<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Member::class, mappedBy="memberType")
     */
    private $members;

    public function __construct()
    {
        $this->members = new ArrayCollection();
    }

    /**
     * @return Collection|Member[]
     */
    public function getMembers(): Collection
    {
        return $this->members;
    }

    public function addMember(Member $member): self
    {
        if (!$this->members->contains($member)) {
            $this->members[] = $member;
            $member->setMemberType($this);
        }

        return $this;
    }

    public function removeMember(Member $member): self
    {
        if ($this->members->removeElement($member)) {
            // set the owning side to null (unless already changed)
            if ($member->getMemberType() === $this) {
                $member->setMemberType(null);
            }
        }

        return $this;
    }


}
