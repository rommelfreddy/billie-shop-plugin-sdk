<?php

namespace Billie\Sdk\Exception;

/**
 * Class InvalidCommandException
 *
 * @author Marcel Barten <github@m-barten.de>
 */
class InvalidCommandException extends \Exception
{
    private $violations;

    /**
     * InvalidCommandException constructor.
     *
     * @param array $violations
     */
    public function __construct($violations)
    {
        parent::__construct();
        $this->violations = $violations;
    }

    /**
     * @return array
     */
    public function getViolations()
    {
        return $this->violations;
    }
}
