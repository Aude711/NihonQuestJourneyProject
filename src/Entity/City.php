<?php

namespace App\Entity;

use App\Repository\CityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CityRepository::class)]
class City
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'city')]
    private ?Region $region = null;

    #[ORM\OneToMany(mappedBy: 'city', targetEntity: Recommendation::class)]
    private Collection $recommendation;

    #[ORM\Column(length: 255)]
    private ?string $cover = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    public function __construct()
    {
        $this->recommendation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): static
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return Collection<int, Recommendation>
     */
    public function getRecommendation(): Collection
    {
        return $this->recommendation;
    }

    public function addRecommendation(Recommendation $recommendation): static
    {
        if (!$this->recommendation->contains($recommendation)) {
            $this->recommendation->add($recommendation);
            $recommendation->setCity($this);
        }

        return $this;
    }

    public function removeRecommendation(Recommendation $recommendation): static
    {
        if ($this->recommendation->removeElement($recommendation)) {
            // set the owning side to null (unless already changed)
            if ($recommendation->getCity() === $this) {
                $recommendation->setCity(null);
            }
        }

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(string $cover): static
    {
        $this->cover = $cover;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
