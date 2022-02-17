<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * PortfolioType
 *
 * @ORM\Table(name="portfolio_type")
 * @ORM\Entity
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

    public function __toString()
    {
        return (string) $this->name;
    }
}
