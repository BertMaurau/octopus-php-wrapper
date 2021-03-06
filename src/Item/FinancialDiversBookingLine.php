<?php

/*
 * The MIT License
 *
 * Copyright 2017 Bert Maurau.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Octopus\Item;

/**
 * Description of FinancialDiversBookingLine
 *
 * @author Bert Maurau
 */
class FinancialDiversBookingLine
{

    private $accountKey; // integer
    private $amount; // double
    private $codaInfo; // codaLine
    private $costCentreKey; // costCentreKey
    private $externalRelationId; // integer
    private $reference; // string
    private $type; // string ("A" = Account , "C" = Client , "S" = Supplier)

    public function __construct($properties = null)
    {
        if ($properties) {
            foreach ($properties as $key => $value) {
                if (property_exists($this, $key)) {
                    $this -> {'set' . ucfirst($key)}($value);
                }
            }
        }
    }

    public function getAccountKey()
    {
        return $this -> accountKey;
    }

    public function getAmount()
    {
        return $this -> amount;
    }

    public function getCodaInfo()
    {
        return $this -> codaInfo;
    }

    public function getCostCentreKey()
    {
        return $this -> costCentreKey;
    }

    public function getExternalRelationId()
    {
        return $this -> externalRelationId;
    }

    public function getReference()
    {
        return $this -> reference;
    }

    public function getType()
    {
        return $this -> type;
    }

    public function setAccountKey($accountKey)
    {
        $this -> accountKey = $accountKey;
        return $this;
    }

    public function setAmount($amount)
    {
        $this -> amount = $amount;
        return $this;
    }

    public function setCodaInfo($codaInfo)
    {
        $this -> codaInfo = new CodaLine($codaInfo);
        return $this;
    }

    public function setCostCentreKey($costCentreKey)
    {
        $this -> costCentreKey = new CostCentreKey($costCentreKey);
        return $this;
    }

    public function setExternalRelationId($externalRelationId)
    {
        $this -> externalRelationId = $externalRelationId;
        return $this;
    }

    public function setReference($reference)
    {
        $this -> reference = $reference;
        return $this;
    }

    public function setType($type)
    {
        $this -> type = $type;
        return $this;
    }

}
