<?php

namespace App\Entity;

use App\Repository\InvitationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvitationsRepository::class)]
class Invitations
{
  public const STATUS_PENDING = 'PENDING';
  public const STATUS_ACCEPTED = 'ACCEPTED';
  public const STATUS_DECLINED = 'DECLINED';
  public const STATUS_CANCELLED = 'CANCELLED';

  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column]
  private ?int $id = null;

  #[ORM\Column]
  private ?int $sender_id = null;

  #[ORM\Column]
  private ?int $receiver_id = null;

  #[ORM\Column(length: 10)]
  private ?string $status = null;

  #[ORM\Column(type: Types::DATETIME_MUTABLE)]
  private ?\DateTimeInterface $created = null;

  public function getId(): ?int
  {
      return $this->id;
  }

  public function getSenderId(): ?int
  {
      return $this->sender_id;
  }

  public function setSenderId(int $sender_id): self
  {
      $this->sender_id = $sender_id;

      return $this;
  }

  public function getReceiverId(): ?int
  {
      return $this->receiver_id;
  }

  public function setReceiverId(int $receiver_id): self
  {
      $this->receiver_id = $receiver_id;

      return $this;
  }

  public function getStatus(): ?string
  {
      return $this->status;
  }

  public function setStatus(string $status): self
  {
      $this->status = $status;

      return $this;
  }

  public function getCreated(): ?\DateTimeInterface
  {
      return $this->created;
  }

  public function setCreated(\DateTimeInterface $created): self
  {
      $this->created = $created;

      return $this;
  }
}
