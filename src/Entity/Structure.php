<?php

namespace App\Entity;

use App\Repository\StructureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructureRepository::class)]
class Structure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $mission = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: audit::class)]
    private Collection $audit;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: besoin::class)]
    private Collection $besoin;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: etude::class)]
    private Collection $etude;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: materiel::class)]
    private Collection $materiel;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: recommandation::class)]
    private Collection $recommandation;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: document::class)]
    private Collection $document;

    public function __construct()
    {
        $this->audit = new ArrayCollection();
        $this->besoin = new ArrayCollection();
        $this->etude = new ArrayCollection();
        $this->materiel = new ArrayCollection();
        $this->recommandation = new ArrayCollection();
        $this->document = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(?string $mission): static
    {
        $this->mission = $mission;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, audit>
     */
    public function getAudit(): Collection
    {
        return $this->audit;
    }

    public function addAudit(audit $audit): static
    {
        if (!$this->audit->contains($audit)) {
            $this->audit->add($audit);
            $audit->setStructure($this);
        }

        return $this;
    }

    public function removeAudit(audit $audit): static
    {
        if ($this->audit->removeElement($audit)) {
            // set the owning side to null (unless already changed)
            if ($audit->getStructure() === $this) {
                $audit->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, besoin>
     */
    public function getBesoin(): Collection
    {
        return $this->besoin;
    }

    public function addBesoin(besoin $besoin): static
    {
        if (!$this->besoin->contains($besoin)) {
            $this->besoin->add($besoin);
            $besoin->setStructure($this);
        }

        return $this;
    }

    public function removeBesoin(besoin $besoin): static
    {
        if ($this->besoin->removeElement($besoin)) {
            // set the owning side to null (unless already changed)
            if ($besoin->getStructure() === $this) {
                $besoin->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, etude>
     */
    public function getEtude(): Collection
    {
        return $this->etude;
    }

    public function addEtude(etude $etude): static
    {
        if (!$this->etude->contains($etude)) {
            $this->etude->add($etude);
            $etude->setStructure($this);
        }

        return $this;
    }

    public function removeEtude(etude $etude): static
    {
        if ($this->etude->removeElement($etude)) {
            // set the owning side to null (unless already changed)
            if ($etude->getStructure() === $this) {
                $etude->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, materiel>
     */
    public function getMateriel(): Collection
    {
        return $this->materiel;
    }

    public function addMateriel(materiel $materiel): static
    {
        if (!$this->materiel->contains($materiel)) {
            $this->materiel->add($materiel);
            $materiel->setStructure($this);
        }

        return $this;
    }

    public function removeMateriel(materiel $materiel): static
    {
        if ($this->materiel->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getStructure() === $this) {
                $materiel->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, recommandation>
     */
    public function getRecommandation(): Collection
    {
        return $this->recommandation;
    }

    public function addRecommandation(recommandation $recommandation): static
    {
        if (!$this->recommandation->contains($recommandation)) {
            $this->recommandation->add($recommandation);
            $recommandation->setStructure($this);
        }

        return $this;
    }

    public function removeRecommandation(recommandation $recommandation): static
    {
        if ($this->recommandation->removeElement($recommandation)) {
            // set the owning side to null (unless already changed)
            if ($recommandation->getStructure() === $this) {
                $recommandation->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, document>
     */
    public function getDocument(): Collection
    {
        return $this->document;
    }

    public function addDocument(document $document): static
    {
        if (!$this->document->contains($document)) {
            $this->document->add($document);
            $document->setStructure($this);
        }

        return $this;
    }

    public function removeDocument(document $document): static
    {
        if ($this->document->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getStructure() === $this) {
                $document->setStructure(null);
            }
        }

        return $this;
    }
}
