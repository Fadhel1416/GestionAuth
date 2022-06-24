<?php

namespace App\Entity;

use App\Repository\LogsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogsRepository::class)
 */
class Logs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Request::class, inversedBy="logs")
     */
    private $requests;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="logs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $createdby;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequests(): ?Request
    {
        return $this->requests;
    }

    public function setRequests(?Request $requests): self
    {
        $this->requests = $requests;

        return $this;
    }

    public function getCreatedby(): ?User
    {
        return $this->createdby;
    }

    public function setCreatedby(?User $createdby): self
    {
        $this->createdby = $createdby;

        return $this;
    }
}
