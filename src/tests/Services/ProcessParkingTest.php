<?php

namespace TemperAppTest\Services;

use TemperApp\Models\Parking;
use TemperApp\Repository\ParkingRepository;
use GuzzleHttp\Client;
use TemperApp\Models\Car;
use TemperAppTest\UnitTest;

/**
 * The processUserTest
 *
 * @category  Services
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
class ProcessParkingTest extends UnitTest
{
    /**
     * Response.
     *
     * @var
     */
    protected ParkingRepository $productRepository;
    protected Client $client;


    public function __construct()
    {
        parent::__construct();
        $parking = new Parking();
        $parking->setName('schipol');
        $this->productRepository = new ParkingRepository($parking);
    }

    public function test_can_add_car()
    {
      // Create new product model
      $car = new Car;
      $car->setName('serie3');
      $car->setBrand('bmw');
      $car->setPlateNumber(1);

      $result = $this->productRepository->setCar($car);
      $expectedResult = 'car added';
      $this->assertEquals($result, $expectedResult);
    }

    public function test_can_find_car()
    {
        $this->test_can_add_car();
        $plateNumber = 1;

        $result = $this->productRepository->findByPlateNumber($plateNumber);
        
        $this->assertTrue($result, true);
    }

    public function test_if_parking_is_empty()
    {
        $this->test_can_add_car();

        $result = $this->productRepository->checkIfIsEmpty();

        $this->assertTrue($result, true);
    }

    public function test_can_delete_user()
    {
        $id = 1;

        $result = $this->productRepository->removeById($id);
        $expectedResult = 'car removed';
        $this->assertEquals($result, $expectedResult);
    }

}
