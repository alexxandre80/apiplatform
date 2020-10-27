<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DrunkRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DrunkRepository::class)
 */
class Drunk
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="error.quantity")
     * @Groups({"user_default"})
     */
    private $quantity;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     * @Groups({"user_default"})
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="drunks")
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity=Drink::class, inversedBy="drunks")
     * @Groups({"user_default"})
     */
    private $drinkId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     * @return Drunk
     */
    public function setCreated(\DateTime $created): Drunk
    {
        $this->created = $created;
        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getDrinkId(): ?Drink
    {
        return $this->drinkId;
    }

    public function setDrinkId(?Drink $drinkId): self
    {
        $this->drinkId = $drinkId;

        return $this;
    }
}
