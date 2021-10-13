<?php

/**
 * @see       https://github.com/laminas/laminas-soap for the canonical source repository
 */

namespace Laminas\Soap\Exception;

use InvalidArgumentException as SPLInvalidArgumentException;

/**
 * Exception thrown when one or more method arguments are invalid
 */
class InvalidArgumentException extends SPLInvalidArgumentException implements ExceptionInterface
{
}
