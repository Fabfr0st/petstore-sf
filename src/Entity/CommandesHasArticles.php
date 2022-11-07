<?php

namespace App\Entity;

use App\Repository\CommandesHasArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandesHasArticlesRepository::class)]
class CommandesHasArticles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite_articles = null;

    #[ORM\ManyToOne(inversedBy: 'commandesHasArticles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $commande = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteArticles(): ?int
    {
        return $this->quantite_articles;
    }

    public function setQuantiteArticles(int $quantite_articles): self
    {
        $this->quantite_articles = $quantite_articles;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getRelation(): ?Article
    {
        return $this->relation;
    }

    public function setRelation(?Article $relation): self
    {
        $this->relation = $relation;

        return $this;
    }
}
