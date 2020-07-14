<?php

declare(strict_types=1);

/*
 * This file is part of PHP Fattura Elettronica.
 *
 * Copyright Adamo Aerendir Crespi 2018-2019.
 *
 * @author    Adamo Aerendir Crespi <hello@aerendir.me>
 * @copyright Copyright (C) 2018 - 2019 Aerendir. All rights reserved.
 * @license   MIT
 */

namespace SerendipityHQ\Component\FatturaElettronica\Property;

trait DOMAware
{
    /** @var \DOMDocument $DOMDocument */
    private $DOMDocument;

    /** @var \DOMElement $DOMElement */
    private $DOMElement;

    /**
     * @param \DOMDocument $DOMDocument
     * @param \DOMElement  $DOMElement
     */
    public function __construct(\DOMDocument $DOMDocument, \DOMElement $DOMElement)
    {
        $this->DOMDocument = $DOMDocument;
        $this->DOMElement = $DOMElement;
    }

    /**
     * @return \DOMDocument
     */
    public function getDOMDocument(): \DOMDocument
    {
        return $this->DOMDocument;
    }

    /**
     * @return \DOMElement
     */
    public function getDOMElement(): \DOMElement
    {
        return $this->DOMElement;
    }
}
