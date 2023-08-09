<?php

namespace TemperApp\Models;

use TemperApp\Contracts\BaseModel;

/**
 * The Car
 *
 * @category   Models
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
class Parking implements BaseModel
{
  /**
   * @var int
   */
  protected int $id;

  /**
   * @var string
   */
  protected string $name;

  public array $cars;

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
    $this->name = $name;
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
