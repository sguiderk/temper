<?php

namespace TemperApp\Models;

use TemperApp\Contracts\BaseModel;
use TemperApp\Contracts\Vehicule;

/**
 * The Car
 *
 * @category   Models
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
class Car implements BaseModel,Vehicule
{
  /**
   * @var int
   */
  protected int $id;

  /**
   * @var string
   */
  protected string $name;

  /**
   * @var string
   */
  protected string $brand;

  /**
   * @var string
   */
  protected string $type;

  /**
   * @var string
   */
  protected string $description;

    /**
     * @var string
     */
    protected string $plateNumber;


  /**
   * @var string
   */
  protected string $createdDate;

  /**
   * @var string
   */
  protected string $updatedDate;

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->plateNumber = $name;
  }

    /**
     * @return string
     */
    public function getPlateNumber(): string
    {
        return $this->plateNumber;
    }

    /**
     * @param string $plateNumber
     */
    public function setPlateNumber(string $plateNumber): void
    {
        $this->plateNumber = $plateNumber;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

  /**
   * @return string
   */
  public function getBrand(): string
  {
    return $this->brand;
  }

  /**
   * @param string $brand
   */
  public function setBrand(string $brand): void
  {
    $this->brand = $brand;
  }

  /**
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  /**
   * @return string
   */
  public function getCreatedDate(): string
  {
    return $this->createdDate;
  }

  /**
   * @param string $createdDate
   */
  public function setCreatedDate(string $createdDate): void
  {
    $this->createdDate = $createdDate;
  }

  /**
   * @return string
   */
  public function getUpdatedDate(): string
  {
    return $this->updatedDate;
  }

  /**
   * @param string $updatedDate
   */
  public function setUpdatedDate(string $updatedDate): void
  {
    $this->updatedDate = $updatedDate;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId(int $id): void
  {
    $this->id = $id;
  }
}
