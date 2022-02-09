<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio", indexes={@ORM\Index(name="IDX_A9ED10627597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_A9ED106293F9A35D", columns={"portfolio_type_id"})})
 * @ORM\Entity
 */
class Portfolio
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
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    public $url;

    /**
     * @var \PortfolioType
     *
     * @ORM\ManyToOne(targetEntity="PortfolioType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="portfolio_type_id", referencedColumnName="id")
     * })
     */
    public $portfolioType;

    /**
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    public $member;


}
