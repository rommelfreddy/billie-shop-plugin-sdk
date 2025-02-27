<?php

namespace Billie\Sdk\Model\Request;

/**
 * @method string|null getInvoiceUrl()
 * @method self        setInvoiceUrl(?string $invoiceNumber)
 * @method string|null getShippingDocumentUrl()
 * @method self        setShippingDocumentUrl(?string $shippingDocumentUrl)
 * @method string|null getExternalOrderId()
 * @method self        setExternalOrderId(?string $externalOrderId)
 * @method string      getInvoiceNumber()
 * @method self        setInvoiceNumber(string $invoiceNumber)
 */
class ShipOrderRequestModel extends OrderRequestModel
{
    /**
     * @var ?string
     */
    protected $invoiceUrl;

    /**
     * @var ?string
     */
    protected $shippingDocumentUrl;

    /**
     * @var ?string
     */
    protected $externalOrderId;

    /**
     * @var string
     */
    protected $invoiceNumber;

    /**
     * {@inheritDoc}
     */
    public function getFieldValidations()
    {
        return array_merge(parent::getFieldValidations(), [
            //            'invoiceUrl' => 'url',
            //            'shippingDocumentUrl' => '?url',
            // The gateway accepts any string
            'invoiceUrl' => '?string',
            'shippingDocumentUrl' => '?string',
            'externalOrderId' => '?string',
            'invoiceNumber' => 'string',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'invoice_url' => $this->getInvoiceUrl(),
            'shipping_document_url' => $this->getShippingDocumentUrl(),
            'external_order_id' => $this->getExternalOrderId(),
            'invoice_number' => $this->getInvoiceNumber(),
        ]);
    }
}
