<?php

namespace App\Entity;

use App\Repository\MemoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemoRepository::class)]
class Memo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Contenu;

    #[ORM\Column(type: 'integer')]
    private $Delai_dexpiration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getDelaiDexpiration(): ?int
    {
        return $this->Delai_dexpiration;
    }

    public function setDelaiDexpiration(int $Delai_dexpiration): self
    {
        $this->Delai_dexpiration = $Delai_dexpiration;

        return $this;
    }
}
