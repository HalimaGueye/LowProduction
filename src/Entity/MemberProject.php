<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberProject
 *
 * @ORM\Table(name="member_project", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_9047677A995975B0", columns={"role_project_id"})}, indexes={@ORM\Index(name="IDX_9047677A7597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_9047677A166D1F9C", columns={"project_id"})})
 * @ORM\Entity
 */
class MemberProject
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
     * @var \RoleProject
     *
     * @ORM\ManyToOne(targetEntity="RoleProject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_project_id", referencedColumnName="id")
     * })
     */
    public $roleProject;

    /**
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    public $member;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    public $project;


}
