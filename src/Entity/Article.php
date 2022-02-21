<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use App\Entity\Picture;
use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Article
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="text", length=0, nullable=false)
     */
    private $abstract;

    /**
     * @var string
     *
     * @ORM\Column(name="url_article", type="string", length=255, nullable=false)
     */
    private $urlArticle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_dashboard", type="string", length=255, nullable=true)
     */
    private $urlDashboard;

    /**
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="articles")
     */
    private $project;

    /**
     * @var \Picture
     *
     * @ORM\ManyToOne(targetEntity="Picture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="picture_id", referencedColumnName="id")
     * })
     */
    private $picture;

    /**
     * @ORM\ManyToMany(targetEntity="Member", mappedBy="articles")
     */
    private $writers;

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

    public function __construct()
    {
        $this->writers = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->title;
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


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): self
    {
        $this->abstract = $abstract;

        return $this;
    }

    public function getUrlArticle(): ?string
    {
        return $this->urlArticle;
    }

    public function setUrlArticle(string $urlArticle): self
    {
        $this->urlArticle = $urlArticle;

        return $this;
    }

    public function getUrlDashboard(): ?string
    {
        return $this->urlDashboard;
    }

    public function setUrlDashboard(?string $urlDashboard): self
    {
        $this->urlDashboard = $urlDashboard;

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

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

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

    /**
     * @return Collection|Member[]
     */
    public function getWriters(): Collection
    {
        return $this->writers;
    }

    public function addWriter(Member $writer): self
    {
        if (!$this->writers->contains($writer)) {
            $this->writers[] = $writer;
            $writer->addArticle($this);
        }

        return $this;
    }

    public function removeWriter(Member $writer): self
    {
        if ($this->writers->removeElement($writer)) {
            $writer->removeArticle($this);
        }

        return $this;
    }
}
