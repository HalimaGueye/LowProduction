<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity
 */
class Picture
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
     * @ORM\OneToMany(targetEntity=Project::class, mappedBy="picture")
     */
    private $project;

    /**
     * @ORM\OneToMany(targetEntity=Supporters::class, mappedBy="picture")
     */
    private $supporters;

    /**
     * @ORM\OneToMany(targetEntity=Partner::class, mappedBy="picture")
     */
    private $partner;

    /**
     * @ORM\OneToMany(targetEntity=Member::class, mappedBy="picture")
     */
    private $member;

    /**
     * @ORM\OneToMany(targetEntity=NewActuality::class, mappedBy="picture")
     */
    private $newActuality;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="picture")
     */
    private $article;

    public function __construct()
    {
        $this->project = new ArrayCollection();
        $this->supporters = new ArrayCollection();
        $this->partner = new ArrayCollection();
        $this->member = new ArrayCollection();
        $this->newActuality = new ArrayCollection();
        $this->article = new ArrayCollection();
    }

    /**
     * @return Collection|Project[]
     */
    public function getProject(): Collection
    {
        return $this->project;
    }

    public function addProject(Project $project): self
    {
        if (!$this->project->contains($project)) {
            $this->project[] = $project;
            $project->setPicture($this);
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        if ($this->project->removeElement($project)) {
            // set the owning side to null (unless already changed)
            if ($project->getPicture() === $this) {
                $project->setPicture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Supporters[]
     */
    public function getSupporters(): Collection
    {
        return $this->supporters;
    }

    public function addSupporter(Supporters $supporter): self
    {
        if (!$this->supporters->contains($supporter)) {
            $this->supporters[] = $supporter;
            $supporter->setPicture($this);
        }

        return $this;
    }

    public function removeSupporter(Supporters $supporter): self
    {
        if ($this->supporters->removeElement($supporter)) {
            // set the owning side to null (unless already changed)
            if ($supporter->getPicture() === $this) {
                $supporter->setPicture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Partner[]
     */
    public function getPartner(): Collection
    {
        return $this->partner;
    }

    public function addPartner(Partner $partner): self
    {
        if (!$this->partner->contains($partner)) {
            $this->partner[] = $partner;
            $partner->setPicture($this);
        }

        return $this;
    }

    public function removePartner(Partner $partner): self
    {
        if ($this->partner->removeElement($partner)) {
            // set the owning side to null (unless already changed)
            if ($partner->getPicture() === $this) {
                $partner->setPicture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Member[]
     */
    public function getMember(): Collection
    {
        return $this->member;
    }

    public function addMember(Member $member): self
    {
        if (!$this->member->contains($member)) {
            $this->member[] = $member;
            $member->setPicture($this);
        }

        return $this;
    }

    public function removeMember(Member $member): self
    {
        if ($this->member->removeElement($member)) {
            // set the owning side to null (unless already changed)
            if ($member->getPicture() === $this) {
                $member->setPicture(null);
            }
        }

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
            $newActuality->setPicture($this);
        }

        return $this;
    }

    public function removeNewActuality(NewActuality $newActuality): self
    {
        if ($this->newActuality->removeElement($newActuality)) {
            // set the owning side to null (unless already changed)
            if ($newActuality->getPicture() === $this) {
                $newActuality->setPicture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticle(): Collection
    {
        return $this->article;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->article->contains($article)) {
            $this->article[] = $article;
            $article->setPicture($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->article->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getPicture() === $this) {
                $article->setPicture(null);
            }
        }

        return $this;
    }


}
