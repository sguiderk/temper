<?php

namespace TemperApp\Constants;

/**
 * The centralized status constants
 *
 * @category   Constants
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @copyright  2023 Temper IO
 * @since      1.0.0
 *
 */
class Status
{
    public const CODE_SUCCESS                      = 200;
    public const CODE_SUCCESS_ADD                  = 201;
    public const CODE_ERROR                        = 400;
    public const CODE_HEADER_NOT_FOUND             = 'HTTP/1.1 404 Not Found';
    public const CODE_HEADER_SUCCESS_ADD           = 'HTTP/1.1 201 Created';
    public const CODE_HEADER_SUCCESS               = 'HTTP/1.1 200 OK';
    public const CODE_HEADER_UNPROCESSABLE_ENTITY  = 'HTTP/1.1 400 Unprocessable Entity';
    public const CODE_NOT_FOUND                    = 404;
    public const CODE_ENTITY_NOT_FOUND             = 422;
    public const TEXT_SUCCESS                      = 'ok';
    public const TEXT_ERROR                        = 'Error';
    public const TEXT_NOT_FOUND                    = 'Not found';
}
