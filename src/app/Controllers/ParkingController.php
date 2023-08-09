<?php

namespace TemperApp\Controllers;

use TemperApp\Constants\Errors;
use TemperApp\Constants\Status;
use TemperApp\Constants\Message;
use TemperApp\Contracts\ControllerInterface;
use TemperApp\Models\Car;
use TemperApp\Repository\ParkingRepository;

/**
 * The ParkingController
 *
 * @category   Controller
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
class ParkingController implements ControllerInterface
{
    /**
     * @param ParkingRepository $parkingRepository
     * @param $requestMethod
     * @param string $carPlateNumber
     * @param string $brand
     * @param string $name
     */
    public function __construct(
        protected ParkingRepository $parkingRepository,
        private                     $requestMethod,
        private string              $carPlateNumber,
        private string              $brand,
        private string              $name
    )
    {
    }

    /**
     * @return string
     */
    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                if ($this->carPlateNumber) {

                    if ($this->checkIfIsEmpty()) {
                        $response = Message::TEXT_WELCOME;
                    } else {
                        $response = Message::TEXT_NO_PLACE;
                    }

                }
                break;
            case 'POST':
                if ($this->check($this->carPlateNumber)) {
                    $this->add($this->carPlateNumber);
                    $response = $this->createFromRequest();
                } else {
                    $response = Message::TEXT_NO_PLACE;
                }
                break;
            case 'DELETE':
                $response = $this->remove($this->carPlateNumber);
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            print($response['body']);
        }
    }

    /**
     * @return array
     */
    public function notFoundResponse(): array
    {
        $response['status_code_header'] = Status::CODE_HEADER_NOT_FOUND;
        $response['body'] = null;
        return $response;
    }

    /**
     * @return array
     */
    public function createFromRequest(): array
    {
        $input = $_POST;

        if (!$this->validateCar($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->add($input);
        $response['status_code_header'] = Status::CODE_HEADER_SUCCESS_ADD;
        $response['body'] = null;

        return $response;
    }

    /**
     * check the parking has this car with platenumber
     * @param int $plateNumber
     * @return array
     */
    public function check(int $plateNumber): array
    {
        $result = $this->parkingRepository->findByPlateNumber($plateNumber);
        if (!$result) {
            return $this->notFoundResponse();
        }

        $response['status_code_header'] = Status::CODE_HEADER_SUCCESS;
        $response['body'] = json_encode($result);

        return $response;
    }

    /**
     * check the parking has en empty place
     * @param string $plateNumber
     * @return array
     */
    public function checkIfIsEmpty(): array
    {
        $result = $this->parkingRepository->findByPlateNumber();
        if (!$result) {
            return $this->notFoundResponse();
        }

        $response['status_code_header'] = Status::CODE_HEADER_SUCCESS;
        $response['body'] = json_encode($result);

        return $response;
    }


    /**
     * add the car to the parking
     * @param int $plateNumber
     * @return array
     */
    public function add(int $plateNumber): array
    {
        $car = new Car();
        $car->setName('serie3');
        $car->setBrand('bmw');
        $car->setType('diesel');
        $car->setPlateNumber($plateNumber);

        $result = $this->parkingRepository->setCar($car);
        if (!$result) {
            return $this->notFoundResponse();
        }

        $response['status_code_header'] = Status::CODE_HEADER_SUCCESS;
        $response['body'] = json_encode($result);

        return $response;
    }

    /**
     * remove the car from parking
     * @param int $plateNumber
     * @return array
     */
    public function remove(int $plateNumber): array
    {
        $result = $this->parkingRepository->removeById($plateNumber);
        if (!$result) {
            return $this->notFoundResponse();
        }

        $response['status_code_header'] = Status::CODE_HEADER_SUCCESS;
        $response['body'] = json_encode($result);

        return $response;
    }


    /**
     * @param array $input
     * @return bool
     */
    public function validateCar(array $input): bool
    {
        if (!isset($input['plateNumber'])) {
            return false;
        }
        if (!isset($input['name'])) {
            return false;
        }
        if (!isset($input['brand'])) {
            return false;
        }
        return true;
    }

    /**
     * @return array
     */
    public function unProcessableEntityResponse(): array
    {
        $response['status_code_header'] = Status::CODE_HEADER_UNPROCESSABLE_ENTITY;
        $response['status'] = 400;
        $response['body'] = json_encode([
            'error' => Errors::INVALID_INPUT
        ]);

        return $response;
    }


}
