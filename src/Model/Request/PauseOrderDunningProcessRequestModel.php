<?php

namespace Billie\Sdk\Model\Request;

/**
 * @method self setNumberOfDays(int $numberOfDays)
 * @method int  getNumberOfDays()
 */
class PauseOrderDunningProcessRequestModel extends OrderRequestModel
{
    /**
     * @var int
     */
    protected $numberOfDays;

    /**
     * {@inheritDoc}
     */
    public function getFieldValidations()
    {
        return array_merge(parent::getFieldValidations(), [
            'numberOfDays' => 'integer',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'number_of_days' => $this->getNumberOfDays(),
        ]);
    }
}
