<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Project
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
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", nullable=false)
     */
    private $format;


    /**
     * @var bool
     *
     * @ORM\Column(name="showSupport", type="boolean", nullable=false)
     */
    private $showSupport;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", nullable=false)
     */
    private $duration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="publication", type="date", nullable=true)
     */
    private $publication;

    /**
     * @var string
     *
     * @ORM\Column(name="acvMessage", type="text", nullable=true)
     */
    private $acvMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="contributorsMessage", type="text", nullable=true)
     */
    private $contributorsMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="supportMessage", type="text", nullable=true)
     */
    private $supportMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="generalMessage", type="text", nullable=true)
     */
    private $generalMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_crowdfunding", type="string", length=255, nullable=true)
     */
    private $urlCrowdfunding;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

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
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="project")
     */
    private $videos;


    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="project")
     */
    private $articles;

    /**
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="projects")
     */
    private $categories;

    /**
     * @ORM\ManyToMany(targetEntity="Partner", mappedBy="projects")
     */
    private $partners;

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
        $this->articles = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->partners = new ArrayCollection();
        $this->videos = new ArrayCollection();
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

    public function __toString()
    {
        return (string) $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setShowSupport(bool $b): self
    {
        $this->showSupport = $b;
        return $this;
    }

    public function getShowSupport(): ?bool
    {
        return $this->showSupport;
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

    public function getAcvMessage(): ?string
    {
        return $this->acvMessage;
    }

    public function setAcvMessage(string $acvMessage): self
    {
        $this->acvMessage = $acvMessage;

        return $this;
    }

    public function getGeneralMessage(): ?string
    {
        return $this->generalMessage;
    }

    public function setGeneralMessage(string $generalMessage): self
    {
        $this->generalMessage = $generalMessage;

        return $this;
    }

    public function getSupportMessage(): ?string
    {
        return $this->supportMessage;
    }

    public function setSupportMessage(string $supportMessage): self
    {
        $this->supportMessage = $supportMessage;

        return $this;
    }

    public function getContributorsMessage(): ?string
    {
        return $this->contributorsMessage;
    }

    public function setContributorsMessage(string $contributorsMessage): self
    {
        $this->contributorsMessage = $contributorsMessage;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getPublication(): ?\DateTimeInterface
    {
        return $this->publication;
    }

    public function setPublication(?\DateTimeInterface $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getUrlCrowdfunding(): ?string
    {
        return $this->urlCrowdfunding;
    }

    public function setUrlCrowdfunding(?string $urlCrowdfunding): self
    {
        $this->urlCrowdfunding = $urlCrowdfunding;

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

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;

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
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setProject($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getProject() === $this) {
                $article->setProject(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addProject($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categories->removeElement($category)) {
            $category->removeProject($this);
        }

        return $this;
    }

    /**
     * @return Collection|Partner[]
     */
    public function getPartners(): Collection
    {
        return $this->partners;
    }

    public function addPartner(Partner $partner): self
    {
        if (!$this->partners->contains($partner)) {
            $this->partners[] = $partner;
            $partner->addProject($this);
        }

        return $this;
    }

    public function removePartner(Partner $partner): self
    {
        if ($this->partners->removeElement($partner)) {
            $partner->removeProject($this);
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
}
