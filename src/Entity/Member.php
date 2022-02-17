<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Member
 *
 * @ORM\Table(name="member", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_70E4FA78A76ED395", columns={"user_id"})}, indexes={@ORM\Index(name="IDX_70E4FA7850BA356", columns={"member_picture_id"}), @ORM\Index(name="IDX_70E4FA787AB83B07", columns={"member_type_id"})})
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
     * @ORM\Column(name="courriel", type="string", length=255, nullable=false)
     */
    public $courriel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    public $description;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    public $user;

    /**
     * @var \MemberType
     *
     * @ORM\ManyToOne(targetEntity="MemberType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="member_type_id", referencedColumnName="id")
     * })
     */
    public $memberType;

    /**
     * @var \Picture
     *
     * @ORM\ManyToOne(targetEntity="Picture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_picture_id", referencedColumnName="id")
     * })
     */
    public $memberPicture;

    /**
     * @OneToMany(targetEntity="Portfolio", mappedBy="member")
     */
    public $portfolios;


    public function __toString()
    {
        return (string) $this->name;
    }

}
