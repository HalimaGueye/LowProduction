<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * PortfolioType
 *
 * @ORM\Table(name="portfolio_type")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class PortfolioType
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
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=255, nullable=false)
     */
    public $icone;

    /**
     * @Vich\UploadableField(mapping="LP_icones", fileNameProperty="icone")
     * * @var File
     */
    public $iconeFile;


    public function setIconeFile(File $image = null)
    {
        $this->iconeFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getIconeFile()
    {
        return $this->iconeFile;
    }

    public function __toString()
    {
        return (string) $this->name;
    }
}
