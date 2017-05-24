<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 08/05/17
 * Time: 17:20
 */

namespace Miky\Component\Invoice\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;
use Miky\Component\Location\Model\LocationInterface;

class Invoice implements CommonModelInterface
{
    Use CommonModelTrait;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var \DateTime
     */
    protected $invoiceDate;

    /**
     * @var \DateTime
     */
    protected $dueDate;

    /**
     * @var string
     */
    protected $issuerName;

    /**
     * @var string
     */
    protected $issuerPhone;

    /**
     * @var string
     */
    protected $clause;

    /**
     * @var LocationInterface
     */
    protected $issuerLocation;

    /**
     * @var LocationInterface
     */
    protected $shipTo;

    /**
     * @var LocationInterface
     */
    protected $billTo;

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @param \DateTime $invoiceDate
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTime $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return mixed
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }

    /**
     * @param mixed $issuerName
     */
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }

    /**
     * @return string
     */
    public function getIssuerPhone()
    {
        return $this->issuerPhone;
    }

    /**
     * @param string $issuerPhone
     */
    public function setIssuerPhone($issuerPhone)
    {
        $this->issuerPhone = $issuerPhone;
    }

    /**
     * @return LocationInterface
     */
    public function getIssuerLocation()
    {
        return $this->issuerLocation;
    }

    /**
     * @param LocationInterface $issuerLocation
     */
    public function setIssuerLocation($issuerLocation)
    {
        $this->issuerLocation = $issuerLocation;
    }

    /**
     * @return LocationInterface
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * @param LocationInterface $shipTo
     */
    public function setShipTo($shipTo)
    {
        $this->shipTo = $shipTo;
    }

    /**
     * @return LocationInterface
     */
    public function getBillTo()
    {
        return $this->billTo;
    }

    /**
     * @param LocationInterface $billTo
     */
    public function setBillTo($billTo)
    {
        $this->billTo = $billTo;
    }

    /**
     * @return string
     */
    public function getClause()
    {
        return $this->clause;
    }

    /**
     * @param string $clause
     */
    public function setClause($clause)
    {
        $this->clause = $clause;
    }

}