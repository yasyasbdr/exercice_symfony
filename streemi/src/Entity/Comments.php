<?php

namespace App\Entity;

use App\Enum\CommentStatusEnum;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Media;

#[ORM\Entity]
class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Media::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Media $media = null;

    #[ORM\ManyToOne(targetEntity: Comments::class)]
    private ?Comments $parentComment = null;

    #[ORM\Column(type: 'text')]
    private ?string $content = null;

    #[ORM\Column(type: 'string', enumType: CommentStatusEnum::class)]
    private CommentStatusEnum $status;

    // Getters et setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getMedia(): ?Media
    {
        return $this->media;
    }

    public function setMedia(?Media $media): self
    {
        $this->media = $media;
        return $this;
    }

    public function getParentComment(): ?Comments
    {
        return $this->parentComment;
    }

    public function setParentComment(?Comments $parentComment): self
    {
        $this->parentComment = $parentComment;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getStatus(): CommentStatusEnum
    {
        return $this->status;
    }

    public function setStatus(CommentStatusEnum $status): self
    {
        $this->status = $status;
        return $this;
    }
}
