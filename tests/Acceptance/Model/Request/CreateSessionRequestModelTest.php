<?php

namespace Billie\Sdk\Tests\Acceptance\Model\Request;

use Billie\Sdk\Model\Request\CreateSessionRequestModel;
use Billie\Sdk\Tests\Acceptance\Model\AbstractModelTestCase;

class CreateSessionRequestModelTest extends AbstractModelTestCase
{
    public function testToArray()
    {
        $data = (new CreateSessionRequestModel())
            ->setMerchantCustomerId('123456789')
            ->toArray();

        static::assertEquals('123456789', $data['merchant_customer_id']);
    }
}
