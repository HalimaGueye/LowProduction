<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="IDX_2FB3D0EE5D83CC1", columns={"state_id"}), @ORM\Index(name="IDX_2FB3D0EEEE45BDBF", columns={"picture_id"})})
 * @ORM\Entity
 *  @Vich\Uploadable
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
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     */
    public $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="date", nullable=false)
     */
    public $creation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="publication", type="date", nullable=true)
     */
    public $publication;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_crowdfunding", type="string", length=255, nullable=true)
     */
    public $urlCrowdfunding;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    public $state;

    /**
     * @ORM\ManyToOne(targetEntity=Picture::class, inversedBy="projects")
     * @Vich\UploadableField (mapping="articlePicture", fileNameProperty="imageFile")
     */
    private $picture;

    /**
     * 
     * @var File|null
     */
    public $imageFile;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="project")
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity=ProjectCategory::class, mappedBy="project")
     */
    private $projectCategories;

    

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->projectCategories = new ArrayCollection();
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




    public function __toString()
    {
        return (string) $this->name;
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

   
}
