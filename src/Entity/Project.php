<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=NewActuality::class, mappedBy="Project")
     */
    private $newActivity;

    /**
     * @ORM\OneToMany(targetEntity=ProjectCategory::class, mappedBy="project")
     */
    private $projectCategories;

    /**
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="project", orphanRemoval=true)
     */
    private $videos;

    /**
     * @ORM\ManyToOne(targetEntity=Picture::class, inversedBy="project")
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity=State::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $state;

    /**
     * @ORM\OneToMany(targetEntity=ProjectPartner::class, mappedBy="project")
     */
    private $projectPartners;

    public function __construct()
    {
        $this->newActivity = new ArrayCollection();
        $this->projectCategories = new ArrayCollection();
        $this->videos = new ArrayCollection();
        $this->projectPartners = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|NewActuality[]
     */
    public function getNewActivity(): Collection
    {
        return $this->newActivity;
    }

    public function addNewActivity(NewActuality $newActivity): self
    {
        if (!$this->newActivity->contains($newActivity)) {
            $this->newActivity[] = $newActivity;
            $newActivity->setProject($this);
        }

        return $this;
    }

    public function removeNewActivity(NewActuality $newActivity): self
    {
        if ($this->newActivity->removeElement($newActivity)) {
            // set the owning side to null (unless already changed)
            if ($newActivity->getProject() === $this) {
                $newActivity->setProject(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ProjectCategory[]
     */
    public function getProjectCategories(): Collection
    {
        return $this->projectCategories;
    }

    public function addProjectCategory(ProjectCategory $projectCategory): self
    {
        if (!$this->projectCategories->contains($projectCategory)) {
            $this->projectCategories[] = $projectCategory;
            $projectCategory->setProject($this);
        }

        return $this;
    }

    public function removeProjectCategory(ProjectCategory $projectCategory): self
    {
        if ($this->projectCategories->removeElement($projectCategory)) {
            // set the owning side to null (unless already changed)
            if ($projectCategory->getProject() === $this) {
                $projectCategory->setProject(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setProject($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getProject() === $this) {
                $video->setProject(null);
            }
        }

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

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return Collection|ProjectPartner[]
     */
    public function getProjectPartners(): Collection
    {
        return $this->projectPartners;
    }

    public function addProjectPartner(ProjectPartner $projectPartner): self
    {
        if (!$this->projectPartners->contains($projectPartner)) {
            $this->projectPartners[] = $projectPartner;
            $projectPartner->setProject($this);
        }

        return $this;
    }

    public function removeProjectPartner(ProjectPartner $projectPartner): self
    {
        if ($this->projectPartners->removeElement($projectPartner)) {
            // set the owning side to null (unless already changed)
            if ($projectPartner->getProject() === $this) {
                $projectPartner->setProject(null);
            }
        }

        return $this;
    }
}
