<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_64C19C15E237E06", columns={"name"}), @ORM\UniqueConstraint(name="UNIQ_64C19C1665648E9", columns={"color"})}, indexes={@ORM\Index(name="IDX_64C19C112469DE2", columns={"category_id"})})
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     */
    public $color;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    public $category;

    /**
     * @ORM\OneToMany(targetEntity=ProjectCategory::class, mappedBy="category")
     */
    private $projectCategories;

    public function __construct()
    {
        $this->projectCategories = new ArrayCollection();
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
            $projectCategory->setCategory($this);
        }

        return $this;
    }

    public function removeProjectCategory(ProjectCategory $projectCategory): self
    {
        if ($this->projectCategories->removeElement($projectCategory)) {
            // set the owning side to null (unless already changed)
            if ($projectCategory->getCategory() === $this) {
                $projectCategory->setCategory(null);
            }
        }

        return $this;
    }


}
