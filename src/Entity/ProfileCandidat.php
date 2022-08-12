<?php

namespace App\Entity;

use App\Repository\ProfileCandidatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfileCandidatRepository::class)]
class ProfileCandidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $cv = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\OneToOne(mappedBy: 'profileCandidat', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isCv(): ?bool
    {
        return $this->cv;
    }

    public function setCv(bool $cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setProfileCandidat(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getProfileCandidat() !== $this) {
            $user->setProfileCandidat($this);
        }

        $this->user = $user;

        return $this;
    }
}
