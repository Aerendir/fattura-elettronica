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

namespace SerendipityHQ\Component\FatturaElettronica\Model;

use SerendipityHQ\Component\FatturaElettronica\Property\DOMAware;
use SerendipityHQ\Component\FatturaElettronica\Property\DOMElementAware;
use SerendipityHQ\Component\FatturaElettronica\Psr\BodyInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\FatturaElettronicaInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\HeaderInterface;

/**
 * {@inheritdoc}
 */
final class FatturaElettronica implements FatturaElettronicaInterface
{
    use DOMAware;

    /** @var HeaderInterface $header */
    private $header;

    /** @var BodyInterface $bodyDocument */
    private $body;

    /**
     * {@inheritdoc}
     */
    public function getHeader(): HeaderInterface
    {
        if (null === $this->header) {
            $header = $this->getDOMDocument()->createElement('FatturaElettronicaHeader');
            $this->getDOMElement()->appendChild($header);
            $this->header = new Header($this->getDOMDocument(), $header);
        }

        return $this->header;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody(int $position = 0): BodyInterface
    {
    }
}
