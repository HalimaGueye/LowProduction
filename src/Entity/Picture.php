<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity
 * @Vich\Uploadable
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
    public $id;

    /**
     * @ORM\OneToMany(targetEntity=Project::class, mappedBy="picture")
     */
    public $projects;

     /**
     * @ORM\Column(type="string", length=255)
     * 
     * @var string
     */
    public $name;

    /**
     * @ORM\Column(name="publication", type="date", nullable=true)
     * @var \DateTime
     *
     */
    public $creation;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @var string
     */
    public $image;

    /**
     * @Vich\UploadableField(mapping="LP_images", fileNameProperty="image")
     * * @var File
     */
    public $imageFile;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="articlePicture")
     */
    private $articles;

    public function __construct()
    {
        $this->projects = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getCreation()
    {
        return $this->creation;
    }

    public function setCreation($creation)
    {
        $this->creation = $creation;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return Collection|Project[]
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(Project $project): self
    {
        if (!$this->projects->contains($project)) {
            $this->projects[] = $project;
            $project->setPicture($this);
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        if ($this->projects->removeElement($project)) {
            // set the owning side to null (unless already changed)
            if ($project->getPicture() === $this) {
                $project->setPicture(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return (string) $this->name;
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
            $article->setArticlePicture($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getArticlePicture() === $this) {
                $article->setArticlePicture(null);
            }
        }

        return $this;
    }

}
