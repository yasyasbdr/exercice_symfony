<?php

namespace App\Entity;

use App\Repository\PlaylistSubscriptionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlaylistSubscriptionsRepository::class)]
class PlaylistSubscriptions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $subscriptionId = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $subscribed_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(int $subscriptionId): static
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    public function getSubscribedAt(): ?\DateTimeImmutable
    {
        return $this->subscribed_at;
    }

    public function setSubscribedAt(\DateTimeImmutable $subscribed_at): static
    {
        $this->subscribed_at = $subscribed_at;

        return $this;
    }
}
