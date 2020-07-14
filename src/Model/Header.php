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

use SerendipityHQ\Component\FatturaElettronica\Model\Header\DatiTrasmissione;
use SerendipityHQ\Component\FatturaElettronica\Property\DOMAware;
use SerendipityHQ\Component\FatturaElettronica\Property\DOMElementAware;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\CedentePrestatoreInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\CessionarioCommittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissioneInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\RappresentanteFiscaleInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\SoggettoEmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\TerzoIntermediarioOSoggettoEmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\HeaderInterface;

/**
 * {@inheritdoc}
 */
final class Header implements HeaderInterface
{
    use DOMAware;

    /** @var DatiTrasmissioneInterface $datiTrasmissione */
    private $datiTrasmissione;

    /**
     * {@inheritdoc}
     */
    public function getDatiTrasmissione(): DatiTrasmissioneInterface
    {
        if (null === $this->datiTrasmissione) {
            $datiTrasmissione = $this->getDOMDocument()->createElement('DatiTrasmissione');
            $this->getDOMElement()->appendChild($datiTrasmissione);
            $this->datiTrasmissione = new DatiTrasmissione($this->getDOMDocument(), $datiTrasmissione);
        }

        return $this->datiTrasmissione;
    }

    /**
     * {@inheritdoc}
     */
    public function getCedentePrestatore(): CedentePrestatoreInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getRappresentanteFiscale(): ?RappresentanteFiscaleInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getCessionarioCommittente(): CessionarioCommittenteInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getTerzoIntermediarioOSoggettoEmittente(): ?TerzoIntermediarioOSoggettoEmittenteInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getSoggettoEmittente(): ?SoggettoEmittenteInterface
    {
    }
}
