<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectPartner
 *
 * @ORM\Table(name="project_partner", indexes={@ORM\Index(name="IDX_A7353273166D1F9C", columns={"project_id"}), @ORM\Index(name="IDX_A73532739393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class ProjectPartner
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
     * @var int|null
     *
     * @ORM\Column(name="weight", type="integer", nullable=true)
     */
    public $weight;

    /**
     * @var \Partner
     *
     * @ORM\ManyToOne(targetEntity="Partner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    public $partner;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    public $project;


}
