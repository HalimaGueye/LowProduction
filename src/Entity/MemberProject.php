<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberProject
 *
 * @ORM\Table(name="member_project", indexes={@ORM\Index(name="IDX_9047677A166D1F9C", columns={"project_id"})})
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
    private $id;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity=Member::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Member;

    /**
     * @ORM\OneToOne(targetEntity=RoleProject::class, mappedBy="memberProject", cascade={"persist", "remove"})
     */
    private $roleProject;

    public function getMember(): ?Member
    {
        return $this->Member;
    }

    public function setMember(?Member $Member): self
    {
        $this->Member = $Member;

        return $this;
    }

    public function getRoleProject(): ?RoleProject
    {
        return $this->roleProject;
    }

    public function setRoleProject(?RoleProject $roleProject): self
    {
        // unset the owning side of the relation if necessary
        if ($roleProject === null && $this->roleProject !== null) {
            $this->roleProject->setMemberProject(null);
        }

        // set the owning side of the relation if necessary
        if ($roleProject !== null && $roleProject->getMemberProject() !== $this) {
            $roleProject->setMemberProject($this);
        }

        $this->roleProject = $roleProject;

        return $this;
    }


}
