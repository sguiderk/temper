<?php

namespace TemperApp\Repository;

use TemperApp\Constants\Errors;
use TemperApp\Constants\Config;
use TemperApp\Constants\Message;
use TemperApp\Contracts\Vehicule;
use TemperApp\Models\Parking;

class ParkingRepository
{
    protected Parking $parking;

    public function __construct(Parking $parking)
    {
        $this->parking = $parking;
    }

    /**
     * @param string $plateNumber
     * @return bool
     */
    public function findByPlateNumber(string $plateNumber): bool
    {
        foreach ($this->parking->cars as $object) {
            if ($object->getPlateNumber() === $plateNumber) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return bool
     */
    public function checkIfIsEmpty(): bool
    {
        return count($this->parking->cars) < Config::LIMIT_PLACES;
    }

    /**
     * @param int $id
     * @return string
     */
    public function removeById(int $id): string
    {
        unset($this->parking->cars[$id]);
        return Message::TEXT_CAR_REMOVED;
    }

    /**
     * @param Vehicule $car
     * @return string
     */
    public function setCar(Vehicule $car): string
    {
        $this->parking->cars[] = $car;
        return Message::TEXT_CAR_ADDED;
    }

}
