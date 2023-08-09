<?php

namespace TemperApp\Contracts;

/**
 * The BaseModel
 *
 * @category   Contracts
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
interface BaseModel
{
    /**
     * @return string
     */
    public function getCreatedDate(): string;

    /**
     * @param string $createdDate
     */
    public function setCreatedDate(string $createdDate): void;

    /**
     * @return string
     */
    public function getUpdatedDate(): string;

    /**
     * @param string $updatedDate
     */
    public function setUpdatedDate(string $updatedDate): void;
}
