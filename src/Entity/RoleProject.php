<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * RoleProject
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class RoleProject
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
     * @ORM\Column(type="text", length=0, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="text", length=0, nullable=true)
     */
    private $icone;

    /**
     * @ORM\ManyToMany(targetEntity="MemberProject", inversedBy="roles")
     * @ORM\JoinTable(name="project_member_role",
     *      joinColumns={@ORM\JoinColumn(name="role_project_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="project_member_id", referencedColumnName="id")}
     *      )
     */
    private $projects;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime
     *
     */
    private $createdAt;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime
     *
     */
    private $updatedAt;

    public function __toString()
    {
        return (string) $this->name;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
    */
    public function updatedTimestamps(): void
    {
        $this->setUpdatedAt(new \DateTime('now'));
        if ($this->getCreatedAt() === null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }

    /**
     * @return Collection|MemberProject[]
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(MemberProject $project): self
    {
        if (!$this->projects->contains($project)) {
            $this->projects[] = $project;
        }

        return $this;
    }

    public function removeProject(MemberProject $project): self
    {
        $this->projects->removeElement($project);

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(?string $icone): self
    {
        $this->icone = $icone;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
