<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewActuality
 *
 * @ORM\Table(name="new_actuality", indexes={@ORM\Index(name="IDX_720CD8B7166D1F9C", columns={"project_id"}), @ORM\Index(name="IDX_720CD8B748F8FCD6", columns={"actuality_picture_id"}), @ORM\Index(name="IDX_720CD8B7A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class NewActuality
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
     * @ORM\Column(name="article", type="text", length=0, nullable=false)
     */
    public $article;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publication", type="date", nullable=false)
     */
    public $publication;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    public $user;

    /**
     * @var \Picture
     *
     * @ORM\ManyToOne(targetEntity="Picture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actuality_picture_id", referencedColumnName="id")
     * })
     */
    public $actualityPicture;

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
