<?php

namespace App\Entity;

use App\Repository\ChatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChatRepository::class)
 */
class Chat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $fromId;

    /**
     * @ORM\Column(type="integer")
     */
    private $toId;

    /**
     * @ORM\Column(type="text")
     */
    private $messageText;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFromId(): ?int
    {
        return $this->fromId;
    }

    public function setFromId(int $fromId): self
    {
        $this->fromId = $fromId;

        return $this;
    }

    public function getToId(): ?int
    {
        return $this->toId;
    }

    public function setToId(int $toId): self
    {
        $this->toId = $toId;

        return $this;
    }

    public function getMessageText(): ?string
    {
        return $this->messageText;
    }

    public function setMessageText(string $messageText): self
    {
        $this->messageText = $messageText;

        return $this;
    }
}
