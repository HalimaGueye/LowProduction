<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberArticle
 *
 * @ORM\Table(name="member_article", indexes={@ORM\Index(name="IDX_BDCEB9F27294869C", columns={"article_id"}), @ORM\Index(name="IDX_BDCEB9F27597D3FE", columns={"member_id"})})
 * @ORM\Entity
 */
class MemberArticle
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
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    public $member;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    public $article;


}
