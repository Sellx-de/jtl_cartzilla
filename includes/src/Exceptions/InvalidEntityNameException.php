<?php

declare(strict_types=1);

namespace JTL\Exceptions;

/**
 * Class InvalidEntityNameException
 * @package JTL\Exceptions
 */
class InvalidEntityNameException extends \Exception
{
    /**
     * InvalidEntityNameException constructor.
     * @param string $entityName
     */
    public function __construct(protected string $entityName)
    {
        parent::__construct('Invalid entity name ' . $entityName);
    }
}
