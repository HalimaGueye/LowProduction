<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberArticle
 *
 * @ORM\Table(name="member_article", indexes={@ORM\Index(name="IDX_BDCEB9F27294869C", columns={"article_id"})})
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
    private $id;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Member::class, inversedBy="memberArticles")
     */
    private $member;

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(?Member $member): self
    {
        $this->member = $member;

        return $this;
    }


}
