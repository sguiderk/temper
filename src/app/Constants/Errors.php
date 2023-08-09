<?php

namespace TemperApp\Constants;

/**
 * The centralized error constants
 *
 * @category   Constants
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
class Errors
{
    public const DB_DETAIL_ERROR        = 'Please Enter DATABASE details in config.php file';
    public const DB_UNABLE_TO_CONNECT   = 'Unable to connect to database';
    public const DB_NO_ROW_FOUND        = 'No Row Found by This Query';
    public const INVALID_INPUT          = 'Invalid input';
    public const ENTITY_NOT_FOUND       = 'Not found';
    public const SOMETHING_WRONG        = 'Something wrong';
}
