<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_64C19C15E237E06", columns={"name"}), @ORM\UniqueConstraint(name="UNIQ_64C19C1665648E9", columns={"color"})})
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
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="childCategory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=Category::class, mappedBy="category")
     */
    private $childCategory;

    public function __construct()
    {
        $this->childCategory = new ArrayCollection();
    }

    public function getCategory(): ?self
    {
        return $this->category;
    }

    public function setCategory(?self $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getChildCategory(): Collection
    {
        return $this->childCategory;
    }

    public function addChildCategory(self $childCategory): self
    {
        if (!$this->childCategory->contains($childCategory)) {
            $this->childCategory[] = $childCategory;
            $childCategory->setCategory($this);
        }

        return $this;
    }

    public function removeChildCategory(self $childCategory): self
    {
        if ($this->childCategory->removeElement($childCategory)) {
            // set the owning side to null (unless already changed)
            if ($childCategory->getCategory() === $this) {
                $childCategory->setCategory(null);
            }
        }

        return $this;
    }


}
