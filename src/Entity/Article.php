<?php

namespace App\Entity;

use Symfony\Component\HttpFoundation\File\File;
use App\Entity\Picture;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="IDX_23A0E66166D1F9C", columns={"project_id"}), @ORM\Index(name="IDX_23A0E66D29C6C3E", columns={"article_picture_id"})})
 * @ORM\Entity
 * @Vich\Uploadable
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
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    public $title;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="text", length=0, nullable=false)
     */
    public $abstract;

    /**
     * @var string
     *
     * @ORM\Column(name="url_article", type="string", length=255, nullable=false)
     */
    public $urlArticle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_dashboard", type="string", length=255, nullable=true)
     */
    public $urlDashboard;


    /**
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="articles")
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity=Picture::class, inversedBy="articles")
     */
    private $articlePicture;



    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getArticlePicture(): ?Picture
    {
        return $this->articlePicture;
    }

    public function setArticlePicture(?Picture $articlePicture): self
    {
        $this->articlePicture = $articlePicture;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->title;
    }
 
    

}
