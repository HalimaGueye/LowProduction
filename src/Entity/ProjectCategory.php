<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectCategory
 *
 * @ORM\Table(name="project_category", indexes={@ORM\Index(name="IDX_3B02921A166D1F9C", columns={"project_id"}), @ORM\Index(name="IDX_3B02921A12469DE2", columns={"category_id"})})
 * @ORM\Entity
 */
class ProjectCategory
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
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="projectCategories")
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="projectCategories")
     */
    private $category;

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }


}
