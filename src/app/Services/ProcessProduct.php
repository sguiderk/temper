<?php

namespace TemperApp\Services;

use TemperApp\Db\FactoryDB;

/**
 * The ProcessUser
 *
 * @category   Services
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
class ProcessProduct
{

    /**
     * @param FactoryDB $factoryDB
     */
    public function __construct(public FactoryDB $factoryDB)
    {
    }
}
